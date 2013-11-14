var Channel = function() {
	var ChannelProto = function() {
		this.active = true;
		this.listen = function(dataReceivedCallback) {
			var thisReadURL = this.read_url;
			var that = this;
			that.waitForMessage = function() {};
			that.waitForMessage = function() {
				$.ajax({
					type : "GET",
					url : thisReadURL,
					dataType: "text",
					async : true, /* If set to non-async, browser shows page as "Loading.."*/
					cache : false,
					timeout : 50000, /* Timeout in ms */

					success : function(data) {
						console.log("Received data from", thisReadURL);
						console.log("data: ", data);
						if (data !== "") {
							dataReceivedCallback(data);
						}
						if(that.active) {
							setTimeout(that.waitForMessage, 200); // Wait for 200ms and request next message
						}
					},
					error : function(XMLHttpRequest, textStatus, errorThrown) {
						console.log("onReceive error: ",textStatus, errorThrown);
						setTimeout(that.waitForMessage, /* Try again after.. */
						15000); /* milliseconds (15seconds) */
					}
				});
			};
			that.waitForMessage();
		};
		this.send = function(sendData, async) {
			that = this;
			async = typeof sync !== "undefined" ? async : true;
			$.ajax({
				url : that.write_url,
				contentType : 'application/json',
				type : 'POST',
				async: async,
				data : JSON.stringify(sendData),
				success : function(data) {
					// nothing for now, maybe add callback in future?
					console.log("Sent something to ", that.write_url);
				},
			});
		};
		this.close = function() {
			that = this;
			that.active = false;
		};
	};
	return {
		setup: function(baseURL, onSucces, onError) {
			console.log("Setup called: " + baseURL);
			$.ajax({
				url : baseURL,
				contentType : 'application/json',
				type : 'POST',
				cache : false,
				success : function(data) {
					var toProxy = new ChannelProto();
					toProxy.read_url = data.side_b_read_url;
					toProxy.write_url = data.side_a_write_url;
					toProxy.qr_url = data.qr_url;

					var fromProxy = new ChannelProto();
					fromProxy.read_url = data.side_a_read_url;
					fromProxy.write_url = data.side_b_write_url;

					onSucces(toProxy, fromProxy);
				},
				error : function(data) {
					console.log("Error creating channel");
					onError();
				}
			});				
		},
		fromReadURL: function(read_url) {
			var c = new ChannelProto();
			c.read_url = read_url;
			return c;
		}, 
		fromWriteURL: function(write_url) {
			var c = new ChannelProto();
			c.write_url = write_url;
			return c;
		}
	}; 
}();
var ProxyReader = {
	// Some local variables
	channelBaseURL: "/irma_web_relay/create",
	cardVersion: "",

	// Channels
	toProxy: null,
	fromProxy: null,

	// Callbacks
	cardFoundCallback: function() {},
	cardLostCallback: function() {},
	readerFoundCallback: function() {},

	response_callbacks: {},
	callbacks: {},

	init: function(url) {
		ProxyReader.setup_channels();
	},

	setup_channels: function() {
		Channel.setup(ProxyReader.channelBaseURL, function(toProxy, fromProxy) {
			console.log("Created to proxy channel", toProxy);
			console.log("Created from proxy channel", fromProxy);

			// Store channels
			ProxyReader.toProxy = toProxy;
			ProxyReader.fromProxy = fromProxy;

			// Bind listen to this
			ProxyReader.fromProxy.listen( function(msg) {
				ProxyReader.handle_message(msg);
			});

			// The Proxy app needs to listen to
			console.log("HELLO HELLO: ", ProxyReader.toProxy.qr_url);
			$("#qr_image").attr("src", ProxyReader.toProxy.qr_url);

			// Tell the proxy where to send its responses
			ProxyReader.toProxy.send({write_url: ProxyReader.fromProxy.write_url});
		}, function() {
			//FIXME: handle this in a proper way
			console.log("Failed to setup from proxy channel");
			ProxyReader.fromProxy = null;
		});
	},

	handle_message: function(msg) {
		data = JSON.parse(msg);
		console.log("Got data", data);
		if(data.type === "event") {
			console.log("Processing event: ", data.name);
			if(data.name === "timeout") {
				// Got a timeout, close the channels
				this.fromProxy.close();
			}

			if(this.callbacks[data.name] != undefined) {
				this.callbacks[data.name]();
			} else {
				console.log("ERROR: unknown event: " + data.name);
			}
		} else if(data.type === "response") {
			console.log("Processing response");
			this.response_callbacks[data.id](data);
			delete this.response_callbacks[data.id];
		}
	},

	selectApplet: function(aid, success, failure) {
		var hexlength = (aid.length/2).toString(16);
		var selectAPDU = '00A40400' + (hexlength.length == 1 ? '0' : '') + hexlength + aid + '00';
		var commands = [{key: "select_aid", command: selectAPDU}];

		ProxyReader.transmitCommandSet(commands, function(response) {
			console.log(response);
			rapdu = response.arguments.responses["select_aid"].apdu;
			if( rapdu.slice(-4) === '9000' ) {
				ProxyReader.cardVersion = rapdu.slice(0, rapdu.length - 4);
				success();
			} else {
				failure();
			}
		});
	},

	transmitCommandSet: function(commands, callback) {
		var cmd = {};
		cmd.type = "command";
		cmd.name = "transmitCommandSet";
		cmd.id = this.randomId();
		cmd.arguments = {};
		cmd.arguments.commands = commands;
		console.log(cmd);

		// Check whether one of the commands failed
		var wrapper_fct = function(data) {
			var responses = data.arguments.responses;
			for(var key in responses) {
				if(responses.hasOwnProperty(key)) {
					var response = responses[key];
					if(!(response.apdu.slice(-4) === "9000" ||
						response.apdu.slice(-4) === "6985" /* FIXME: Workaround for broken signature verification on the card */)) {
						responses["smartcardstatus"] = "failed";
						responses["failed-key"] = key;
					}
				}
			}
			data.arguments.responses = responses;
			callback(data);
		};

		this.register_callback(cmd.id, wrapper_fct);
		this.toProxy.send(cmd);
	},

	verifyPin: function(callback) {
		var cmd = {};
		cmd.type = "command";
		cmd.name = "authorizeWithPin";
		cmd.id = this.randomId();
		cmd.arguments = {};
		console.log(cmd);

		this.register_callback(cmd.id, callback);
		this.toProxy.send(cmd);
	},

	sendFeedback: function(feedback, state) {
		var cmd = {};
		cmd.type = "event";
		cmd.name = "statusUpdate";
		cmd.id = this.randomId();
		cmd.arguments = {
			data : {
				state : state,
				feedback : feedback,
			}
		};
		console.log(cmd);

		this.toProxy.send(cmd);
	},

	close: function() {
		console.log("Closing connection");
		var cmd = {};
		cmd.type = "event";
		cmd.name = "done";
		cmd.id = this.randomId();

		this.toProxy.send(cmd, false);
		this.fromProxy.close();
	},

	bind: function(eventName, callback) {
		this.callbacks[eventName] = callback;
		console.log("Bound ", eventName, this.callbacks);
	},

	randomId: function() {
		return Math.floor((1 + Math.random()) * 0x100000000)
			.toString(16).substring(1);
	},

	register_callback: function(id, callback) {
		this.response_callbacks[id] = callback;
	},
};
  var SmartCardHandler = {

			cardVersion: "",

		  init: function(applet) {
			  this.waitTime = 100;
			  this.applet = applet;
			  this.callbacks = {};
			  this.waitForApplet();	
		  },
		  waitForApplet: function() {
			  this.waitTime = Math.min(this.waitTime * 2,2000);
			  if (typeof document.embeds[0].run != 'undefined') {
				  console.log('It is loaded!');
				  this.applet = document.embeds[0];
				  this.setup();
				  this.showReaderList();
			  } else {
				  console.log('Waiting for',this.waitTime,'miliseconds');
				  var _this = this;
				  setTimeout(function() {_this.waitForApplet(); },this.waitTime);
			  }
		  },
		  setup: function() {
			  this.applet.run();
			  this.applet.enableSignals('SmartCardHandler');
			  this.handleCallback('appletReady');
		  },
		  dispatch: function(signal) {
			  console.log(signal);
			  this.handleCallback(signal.getEvent());
		  },
		  showReaderList: function() {
			  console.log(this.applet.getReaderList());
		  },
		  connectFirstCard: function() {
			  console.log("Connecting");
			  return this.applet.connectFirstCard();
		  },
		  selectApplet: function(aid, success, failure) {
			  var hexlength = (aid.length/2).toString(16),
			  	  selectAPDU = '00A40400' + (hexlength.length == 1 ? '0' : '') + hexlength + aid + '00';
			  rapdu = this.transmit(selectAPDU);
              console.log("response: " + rapdu);
			  if( rapdu.slice(-4) === '9000' ) {
				SmartCardHandler.cardVersion = rapdu.slice(0, rapdu.length - 4);
				success();
			  } else {
			  	failure();
			  }
		  },
		  transmit: function(command) {
			  console.log("Transmit: " + command);
			  response = this.applet.transmitString(command);
			  console.log("Response: " + response)
			  return response;
		  },
		  sendFeedback: function(message, state) {
			// Not possible on normal cardreaders
			  console.log("CardReader feedback: " + message);
		  },
		  close: function() {
			  // TODO: still need to implement this somehow
			  console.log("Closing connection not implemented for smartcard");
		  },
		  transmitCommandSet: function(commands, callback) {
			  var responses = {};
			  for(var i=0, len=commands.length; i < len; i++) {
				  response = this.transmit(commands[i].command);
				  responses[commands[i].key] = { key: commands[i].key, apdu: response };
				  if (!(response.slice(-4) === "9000" ||  
						  response.slice(-4) === "6985" /* FIXME: Workaround for broken signature verification on the card */)) {
					  // Don't bother continuing when the response is not ok
					  responses['smartcardstatus'] = 'failed';
					  responses['failed-key'] = commands[i].key;
					  break;
				  }
			  }

			  // Construct well-formed result
			  var result = {};
			  result.type = "response";
			  result.name = "transmitCommandSet";
			  result.arguments = {"responses": responses};
			  callback(result);
		  },
		  verifyPin: function(callback) {
			  tries = 3;
			  while(tries > 0 && tries < 10) {
				  // Repeat since pin incorrect
				  // FIXME: need better feedback for this but that needs to go into applet.
				  tries = this.applet.verifyPin();
				  console.log("Pin Incorrect, tries left: " + tries);
			  }

			  var response = {type: "response", name: "authorizeWithPin", arguments: {}};

			  if(tries == 0) {
				  response.arguments.result = "failure";
			  } else {
				  response.arguments.result = "success";
			  }
			  callback(response);
		  },
		  // Merge above two at one time
		  transmitCommandSetWithCB: function(commands, callback) {
			  var responses = {};
			  responses['result'] = 'succes';
			  for(var i=0, len=commands.length; i < len; i++) {
				  response = this.transmit(commands[i].command);
				  responses[commands[i].key] = { key: commands[i].key, apdu: response };
				  if (response.slice(-4) !== "9000") {
					  // Don't bother continuing when the response is not ok
					  responses['result'] = 'failed';
					  break;
				  }
				  callback((i+1)/commands.length);
			  }
			  return responses;
		  },
		  bind: function(eventName,callback) {
			  this.callbacks[eventName] = callback;
		  },
		  handleCallback: function(eventName) {
			  if (typeof this.callbacks[eventName] !== 'undefined') {
				  this.callbacks[eventName]();
			  }
		  }
  };
/*!
* Bootstrap.js by @fat & @mdo
* Copyright 2012 Twitter, Inc.
* http://www.apache.org/licenses/LICENSE-2.0.txt
*/
!function(e){e(function(){"use strict";e.support.transition=function(){var e=function(){var e=document.createElement("bootstrap"),t={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"},n;for(n in t)if(e.style[n]!==undefined)return t[n]}();return e&&{end:e}}()})}(window.jQuery),!function(e){"use strict";var t='[data-dismiss="alert"]',n=function(n){e(n).on("click",t,this.close)};n.prototype.close=function(t){function s(){i.trigger("closed").remove()}var n=e(this),r=n.attr("data-target"),i;r||(r=n.attr("href"),r=r&&r.replace(/.*(?=#[^\s]*$)/,"")),i=e(r),t&&t.preventDefault(),i.length||(i=n.hasClass("alert")?n:n.parent()),i.trigger(t=e.Event("close"));if(t.isDefaultPrevented())return;i.removeClass("in"),e.support.transition&&i.hasClass("fade")?i.on(e.support.transition.end,s):s()},e.fn.alert=function(t){return this.each(function(){var r=e(this),i=r.data("alert");i||r.data("alert",i=new n(this)),typeof t=="string"&&i[t].call(r)})},e.fn.alert.Constructor=n,e(function(){e("body").on("click.alert.data-api",t,n.prototype.close)})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.$element=e(t),this.options=e.extend({},e.fn.button.defaults,n)};t.prototype.setState=function(e){var t="disabled",n=this.$element,r=n.data(),i=n.is("input")?"val":"html";e+="Text",r.resetText||n.data("resetText",n[i]()),n[i](r[e]||this.options[e]),setTimeout(function(){e=="loadingText"?n.addClass(t).attr(t,t):n.removeClass(t).removeAttr(t)},0)},t.prototype.toggle=function(){var e=this.$element.parent('[data-toggle="buttons-radio"]');e&&e.find(".active").removeClass("active"),this.$element.toggleClass("active")},e.fn.button=function(n){return this.each(function(){var r=e(this),i=r.data("button"),s=typeof n=="object"&&n;i||r.data("button",i=new t(this,s)),n=="toggle"?i.toggle():n&&i.setState(n)})},e.fn.button.defaults={loadingText:"loading..."},e.fn.button.Constructor=t,e(function(){e("body").on("click.button.data-api","[data-toggle^=button]",function(t){var n=e(t.target);n.hasClass("btn")||(n=n.closest(".btn")),n.button("toggle")})})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.$element=e(t),this.options=n,this.options.slide&&this.slide(this.options.slide),this.options.pause=="hover"&&this.$element.on("mouseenter",e.proxy(this.pause,this)).on("mouseleave",e.proxy(this.cycle,this))};t.prototype={cycle:function(t){return t||(this.paused=!1),this.options.interval&&!this.paused&&(this.interval=setInterval(e.proxy(this.next,this),this.options.interval)),this},to:function(t){var n=this.$element.find(".item.active"),r=n.parent().children(),i=r.index(n),s=this;if(t>r.length-1||t<0)return;return this.sliding?this.$element.one("slid",function(){s.to(t)}):i==t?this.pause().cycle():this.slide(t>i?"next":"prev",e(r[t]))},pause:function(t){return t||(this.paused=!0),this.$element.find(".next, .prev").length&&e.support.transition.end&&(this.$element.trigger(e.support.transition.end),this.cycle()),clearInterval(this.interval),this.interval=null,this},next:function(){if(this.sliding)return;return this.slide("next")},prev:function(){if(this.sliding)return;return this.slide("prev")},slide:function(t,n){var r=this.$element.find(".item.active"),i=n||r[t](),s=this.interval,o=t=="next"?"left":"right",u=t=="next"?"first":"last",a=this,f=e.Event("slide",{relatedTarget:i[0]});this.sliding=!0,s&&this.pause(),i=i.length?i:this.$element.find(".item")[u]();if(i.hasClass("active"))return;if(e.support.transition&&this.$element.hasClass("slide")){this.$element.trigger(f);if(f.isDefaultPrevented())return;i.addClass(t),i[0].offsetWidth,r.addClass(o),i.addClass(o),this.$element.one(e.support.transition.end,function(){i.removeClass([t,o].join(" ")).addClass("active"),r.removeClass(["active",o].join(" ")),a.sliding=!1,setTimeout(function(){a.$element.trigger("slid")},0)})}else{this.$element.trigger(f);if(f.isDefaultPrevented())return;r.removeClass("active"),i.addClass("active"),this.sliding=!1,this.$element.trigger("slid")}return s&&this.cycle(),this}},e.fn.carousel=function(n){return this.each(function(){var r=e(this),i=r.data("carousel"),s=e.extend({},e.fn.carousel.defaults,typeof n=="object"&&n),o=typeof n=="string"?n:s.slide;i||r.data("carousel",i=new t(this,s)),typeof n=="number"?i.to(n):o?i[o]():s.interval&&i.cycle()})},e.fn.carousel.defaults={interval:5e3,pause:"hover"},e.fn.carousel.Constructor=t,e(function(){e("body").on("click.carousel.data-api","[data-slide]",function(t){var n=e(this),r,i=e(n.attr("data-target")||(r=n.attr("href"))&&r.replace(/.*(?=#[^\s]+$)/,"")),s=!i.data("modal")&&e.extend({},i.data(),n.data());i.carousel(s),t.preventDefault()})})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.$element=e(t),this.options=e.extend({},e.fn.collapse.defaults,n),this.options.parent&&(this.$parent=e(this.options.parent)),this.options.toggle&&this.toggle()};t.prototype={constructor:t,dimension:function(){var e=this.$element.hasClass("width");return e?"width":"height"},show:function(){var t,n,r,i;if(this.transitioning)return;t=this.dimension(),n=e.camelCase(["scroll",t].join("-")),r=this.$parent&&this.$parent.find("> .accordion-group > .in");if(r&&r.length){i=r.data("collapse");if(i&&i.transitioning)return;r.collapse("hide"),i||r.data("collapse",null)}this.$element[t](0),this.transition("addClass",e.Event("show"),"shown"),e.support.transition&&this.$element[t](this.$element[0][n])},hide:function(){var t;if(this.transitioning)return;t=this.dimension(),this.reset(this.$element[t]()),this.transition("removeClass",e.Event("hide"),"hidden"),this.$element[t](0)},reset:function(e){var t=this.dimension();return this.$element.removeClass("collapse")[t](e||"auto")[0].offsetWidth,this.$element[e!==null?"addClass":"removeClass"]("collapse"),this},transition:function(t,n,r){var i=this,s=function(){n.type=="show"&&i.reset(),i.transitioning=0,i.$element.trigger(r)};this.$element.trigger(n);if(n.isDefaultPrevented())return;this.transitioning=1,this.$element[t]("in"),e.support.transition&&this.$element.hasClass("collapse")?this.$element.one(e.support.transition.end,s):s()},toggle:function(){this[this.$element.hasClass("in")?"hide":"show"]()}},e.fn.collapse=function(n){return this.each(function(){var r=e(this),i=r.data("collapse"),s=typeof n=="object"&&n;i||r.data("collapse",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.collapse.defaults={toggle:!0},e.fn.collapse.Constructor=t,e(function(){e("body").on("click.collapse.data-api","[data-toggle=collapse]",function(t){var n=e(this),r,i=n.attr("data-target")||t.preventDefault()||(r=n.attr("href"))&&r.replace(/.*(?=#[^\s]+$)/,""),s=e(i).data("collapse")?"toggle":n.data();n[e(i).hasClass("in")?"addClass":"removeClass"]("collapsed"),e(i).collapse(s)})})}(window.jQuery),!function(e){"use strict";function r(){i(e(t)).removeClass("open")}function i(t){var n=t.attr("data-target"),r;return n||(n=t.attr("href"),n=n&&n.replace(/.*(?=#[^\s]*$)/,"")),r=e(n),r.length||(r=t.parent()),r}var t="[data-toggle=dropdown]",n=function(t){var n=e(t).on("click.dropdown.data-api",this.toggle);e("html").on("click.dropdown.data-api",function(){n.parent().removeClass("open")})};n.prototype={constructor:n,toggle:function(t){var n=e(this),s,o;if(n.is(".disabled, :disabled"))return;return s=i(n),o=s.hasClass("open"),r(),o||(s.toggleClass("open"),n.focus()),!1},keydown:function(t){var n,r,s,o,u,a;if(!/(38|40|27)/.test(t.keyCode))return;n=e(this),t.preventDefault(),t.stopPropagation();if(n.is(".disabled, :disabled"))return;o=i(n),u=o.hasClass("open");if(!u||u&&t.keyCode==27)return n.click();r=e("[role=menu] li:not(.divider) a",o);if(!r.length)return;a=r.index(r.filter(":focus")),t.keyCode==38&&a>0&&a--,t.keyCode==40&&a<r.length-1&&a++,~a||(a=0),r.eq(a).focus()}},e.fn.dropdown=function(t){return this.each(function(){var r=e(this),i=r.data("dropdown");i||r.data("dropdown",i=new n(this)),typeof t=="string"&&i[t].call(r)})},e.fn.dropdown.Constructor=n,e(function(){e("html").on("click.dropdown.data-api touchstart.dropdown.data-api",r),e("body").on("click.dropdown touchstart.dropdown.data-api",".dropdown",function(e){e.stopPropagation()}).on("click.dropdown.data-api touchstart.dropdown.data-api",t,n.prototype.toggle).on("keydown.dropdown.data-api touchstart.dropdown.data-api",t+", [role=menu]",n.prototype.keydown)})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.options=n,this.$element=e(t).delegate('[data-dismiss="modal"]',"click.dismiss.modal",e.proxy(this.hide,this)),this.options.remote&&this.$element.find(".modal-body").load(this.options.remote)};t.prototype={constructor:t,toggle:function(){return this[this.isShown?"hide":"show"]()},show:function(){var t=this,n=e.Event("show");this.$element.trigger(n);if(this.isShown||n.isDefaultPrevented())return;e("body").addClass("modal-open"),this.isShown=!0,this.escape(),this.backdrop(function(){var n=e.support.transition&&t.$element.hasClass("fade");t.$element.parent().length||t.$element.appendTo(document.body),t.$element.show(),n&&t.$element[0].offsetWidth,t.$element.addClass("in").attr("aria-hidden",!1).focus(),t.enforceFocus(),n?t.$element.one(e.support.transition.end,function(){t.$element.trigger("shown")}):t.$element.trigger("shown")})},hide:function(t){t&&t.preventDefault();var n=this;t=e.Event("hide"),this.$element.trigger(t);if(!this.isShown||t.isDefaultPrevented())return;this.isShown=!1,e("body").removeClass("modal-open"),this.escape(),e(document).off("focusin.modal"),this.$element.removeClass("in").attr("aria-hidden",!0),e.support.transition&&this.$element.hasClass("fade")?this.hideWithTransition():this.hideModal()},enforceFocus:function(){var t=this;e(document).on("focusin.modal",function(e){t.$element[0]!==e.target&&!t.$element.has(e.target).length&&t.$element.focus()})},escape:function(){var e=this;this.isShown&&this.options.keyboard?this.$element.on("keyup.dismiss.modal",function(t){t.which==27&&e.hide()}):this.isShown||this.$element.off("keyup.dismiss.modal")},hideWithTransition:function(){var t=this,n=setTimeout(function(){t.$element.off(e.support.transition.end),t.hideModal()},500);this.$element.one(e.support.transition.end,function(){clearTimeout(n),t.hideModal()})},hideModal:function(e){this.$element.hide().trigger("hidden"),this.backdrop()},removeBackdrop:function(){this.$backdrop.remove(),this.$backdrop=null},backdrop:function(t){var n=this,r=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var i=e.support.transition&&r;this.$backdrop=e('<div class="modal-backdrop '+r+'" />').appendTo(document.body),this.options.backdrop!="static"&&this.$backdrop.click(e.proxy(this.hide,this)),i&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),i?this.$backdrop.one(e.support.transition.end,t):t()}else!this.isShown&&this.$backdrop?(this.$backdrop.removeClass("in"),e.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one(e.support.transition.end,e.proxy(this.removeBackdrop,this)):this.removeBackdrop()):t&&t()}},e.fn.modal=function(n){return this.each(function(){var r=e(this),i=r.data("modal"),s=e.extend({},e.fn.modal.defaults,r.data(),typeof n=="object"&&n);i||r.data("modal",i=new t(this,s)),typeof n=="string"?i[n]():s.show&&i.show()})},e.fn.modal.defaults={backdrop:!0,keyboard:!0,show:!0},e.fn.modal.Constructor=t,e(function(){e("body").on("click.modal.data-api",'[data-toggle="modal"]',function(t){var n=e(this),r=n.attr("href"),i=e(n.attr("data-target")||r&&r.replace(/.*(?=#[^\s]+$)/,"")),s=i.data("modal")?"toggle":e.extend({remote:!/#/.test(r)&&r},i.data(),n.data());t.preventDefault(),i.modal(s).one("hide",function(){n.focus()})})})}(window.jQuery),!function(e){"use strict";var t=function(e,t){this.init("tooltip",e,t)};t.prototype={constructor:t,init:function(t,n,r){var i,s;this.type=t,this.$element=e(n),this.options=this.getOptions(r),this.enabled=!0,this.options.trigger=="click"?this.$element.on("click."+this.type,this.options.selector,e.proxy(this.toggle,this)):this.options.trigger!="manual"&&(i=this.options.trigger=="hover"?"mouseenter":"focus",s=this.options.trigger=="hover"?"mouseleave":"blur",this.$element.on(i+"."+this.type,this.options.selector,e.proxy(this.enter,this)),this.$element.on(s+"."+this.type,this.options.selector,e.proxy(this.leave,this))),this.options.selector?this._options=e.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},getOptions:function(t){return t=e.extend({},e.fn[this.type].defaults,t,this.$element.data()),t.delay&&typeof t.delay=="number"&&(t.delay={show:t.delay,hide:t.delay}),t},enter:function(t){var n=e(t.currentTarget)[this.type](this._options).data(this.type);if(!n.options.delay||!n.options.delay.show)return n.show();clearTimeout(this.timeout),n.hoverState="in",this.timeout=setTimeout(function(){n.hoverState=="in"&&n.show()},n.options.delay.show)},leave:function(t){var n=e(t.currentTarget)[this.type](this._options).data(this.type);this.timeout&&clearTimeout(this.timeout);if(!n.options.delay||!n.options.delay.hide)return n.hide();n.hoverState="out",this.timeout=setTimeout(function(){n.hoverState=="out"&&n.hide()},n.options.delay.hide)},show:function(){var e,t,n,r,i,s,o;if(this.hasContent()&&this.enabled){e=this.tip(),this.setContent(),this.options.animation&&e.addClass("fade"),s=typeof this.options.placement=="function"?this.options.placement.call(this,e[0],this.$element[0]):this.options.placement,t=/in/.test(s),e.remove().css({top:0,left:0,display:"block"}).appendTo(t?this.$element:document.body),n=this.getPosition(t),r=e[0].offsetWidth,i=e[0].offsetHeight;switch(t?s.split(" ")[1]:s){case"bottom":o={top:n.top+n.height,left:n.left+n.width/2-r/2};break;case"top":o={top:n.top-i,left:n.left+n.width/2-r/2};break;case"left":o={top:n.top+n.height/2-i/2,left:n.left-r};break;case"right":o={top:n.top+n.height/2-i/2,left:n.left+n.width}}e.css(o).addClass(s).addClass("in")}},setContent:function(){var e=this.tip(),t=this.getTitle();e.find(".tooltip-inner")[this.options.html?"html":"text"](t),e.removeClass("fade in top bottom left right")},hide:function(){function r(){var t=setTimeout(function(){n.off(e.support.transition.end).remove()},500);n.one(e.support.transition.end,function(){clearTimeout(t),n.remove()})}var t=this,n=this.tip();return n.removeClass("in"),e.support.transition&&this.$tip.hasClass("fade")?r():n.remove(),this},fixTitle:function(){var e=this.$element;(e.attr("title")||typeof e.attr("data-original-title")!="string")&&e.attr("data-original-title",e.attr("title")||"").removeAttr("title")},hasContent:function(){return this.getTitle()},getPosition:function(t){return e.extend({},t?{top:0,left:0}:this.$element.offset(),{width:this.$element[0].offsetWidth,height:this.$element[0].offsetHeight})},getTitle:function(){var e,t=this.$element,n=this.options;return e=t.attr("data-original-title")||(typeof n.title=="function"?n.title.call(t[0]):n.title),e},tip:function(){return this.$tip=this.$tip||e(this.options.template)},validate:function(){this.$element[0].parentNode||(this.hide(),this.$element=null,this.options=null)},enable:function(){this.enabled=!0},disable:function(){this.enabled=!1},toggleEnabled:function(){this.enabled=!this.enabled},toggle:function(){this[this.tip().hasClass("in")?"hide":"show"]()},destroy:function(){this.hide().$element.off("."+this.type).removeData(this.type)}},e.fn.tooltip=function(n){return this.each(function(){var r=e(this),i=r.data("tooltip"),s=typeof n=="object"&&n;i||r.data("tooltip",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.tooltip.Constructor=t,e.fn.tooltip.defaults={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover",title:"",delay:0,html:!0}}(window.jQuery),!function(e){"use strict";var t=function(e,t){this.init("popover",e,t)};t.prototype=e.extend({},e.fn.tooltip.Constructor.prototype,{constructor:t,setContent:function(){var e=this.tip(),t=this.getTitle(),n=this.getContent();e.find(".popover-title")[this.options.html?"html":"text"](t),e.find(".popover-content > *")[this.options.html?"html":"text"](n),e.removeClass("fade top bottom left right in")},hasContent:function(){return this.getTitle()||this.getContent()},getContent:function(){var e,t=this.$element,n=this.options;return e=t.attr("data-content")||(typeof n.content=="function"?n.content.call(t[0]):n.content),e},tip:function(){return this.$tip||(this.$tip=e(this.options.template)),this.$tip},destroy:function(){this.hide().$element.off("."+this.type).removeData(this.type)}}),e.fn.popover=function(n){return this.each(function(){var r=e(this),i=r.data("popover"),s=typeof n=="object"&&n;i||r.data("popover",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.popover.Constructor=t,e.fn.popover.defaults=e.extend({},e.fn.tooltip.defaults,{placement:"right",trigger:"click",content:"",template:'<div class="popover"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div></div></div>'})}(window.jQuery),!function(e){"use strict";function t(t,n){var r=e.proxy(this.process,this),i=e(t).is("body")?e(window):e(t),s;this.options=e.extend({},e.fn.scrollspy.defaults,n),this.$scrollElement=i.on("scroll.scroll-spy.data-api",r),this.selector=(this.options.target||(s=e(t).attr("href"))&&s.replace(/.*(?=#[^\s]+$)/,"")||"")+" .nav li > a",this.$body=e("body"),this.refresh(),this.process()}t.prototype={constructor:t,refresh:function(){var t=this,n;this.offsets=e([]),this.targets=e([]),n=this.$body.find(this.selector).map(function(){var t=e(this),n=t.data("target")||t.attr("href"),r=/^#\w/.test(n)&&e(n);return r&&r.length&&[[r.position().top,n]]||null}).sort(function(e,t){return e[0]-t[0]}).each(function(){t.offsets.push(this[0]),t.targets.push(this[1])})},process:function(){var e=this.$scrollElement.scrollTop()+this.options.offset,t=this.$scrollElement[0].scrollHeight||this.$body[0].scrollHeight,n=t-this.$scrollElement.height(),r=this.offsets,i=this.targets,s=this.activeTarget,o;if(e>=n)return s!=(o=i.last()[0])&&this.activate(o);for(o=r.length;o--;)s!=i[o]&&e>=r[o]&&(!r[o+1]||e<=r[o+1])&&this.activate(i[o])},activate:function(t){var n,r;this.activeTarget=t,e(this.selector).parent(".active").removeClass("active"),r=this.selector+'[data-target="'+t+'"],'+this.selector+'[href="'+t+'"]',n=e(r).parent("li").addClass("active"),n.parent(".dropdown-menu").length&&(n=n.closest("li.dropdown").addClass("active")),n.trigger("activate")}},e.fn.scrollspy=function(n){return this.each(function(){var r=e(this),i=r.data("scrollspy"),s=typeof n=="object"&&n;i||r.data("scrollspy",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.scrollspy.Constructor=t,e.fn.scrollspy.defaults={offset:10},e(window).on("load",function(){e('[data-spy="scroll"]').each(function(){var t=e(this);t.scrollspy(t.data())})})}(window.jQuery),!function(e){"use strict";var t=function(t){this.element=e(t)};t.prototype={constructor:t,show:function(){var t=this.element,n=t.closest("ul:not(.dropdown-menu)"),r=t.attr("data-target"),i,s,o;r||(r=t.attr("href"),r=r&&r.replace(/.*(?=#[^\s]*$)/,""));if(t.parent("li").hasClass("active"))return;i=n.find(".active a").last()[0],o=e.Event("show",{relatedTarget:i}),t.trigger(o);if(o.isDefaultPrevented())return;s=e(r),this.activate(t.parent("li"),n),this.activate(s,s.parent(),function(){t.trigger({type:"shown",relatedTarget:i})})},activate:function(t,n,r){function o(){i.removeClass("active").find("> .dropdown-menu > .active").removeClass("active"),t.addClass("active"),s?(t[0].offsetWidth,t.addClass("in")):t.removeClass("fade"),t.parent(".dropdown-menu")&&t.closest("li.dropdown").addClass("active"),r&&r()}var i=n.find("> .active"),s=r&&e.support.transition&&i.hasClass("fade");s?i.one(e.support.transition.end,o):o(),i.removeClass("in")}},e.fn.tab=function(n){return this.each(function(){var r=e(this),i=r.data("tab");i||r.data("tab",i=new t(this)),typeof n=="string"&&i[n]()})},e.fn.tab.Constructor=t,e(function(){e("body").on("click.tab.data-api",'[data-toggle="tab"], [data-toggle="pill"]',function(t){t.preventDefault(),e(this).tab("show")})})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.$element=e(t),this.options=e.extend({},e.fn.typeahead.defaults,n),this.matcher=this.options.matcher||this.matcher,this.sorter=this.options.sorter||this.sorter,this.highlighter=this.options.highlighter||this.highlighter,this.updater=this.options.updater||this.updater,this.$menu=e(this.options.menu).appendTo("body"),this.source=this.options.source,this.shown=!1,this.listen()};t.prototype={constructor:t,select:function(){var e=this.$menu.find(".active").attr("data-value");return this.$element.val(this.updater(e)).change(),this.hide()},updater:function(e){return e},show:function(){var t=e.extend({},this.$element.offset(),{height:this.$element[0].offsetHeight});return this.$menu.css({top:t.top+t.height,left:t.left}),this.$menu.show(),this.shown=!0,this},hide:function(){return this.$menu.hide(),this.shown=!1,this},lookup:function(t){var n;return this.query=this.$element.val(),!this.query||this.query.length<this.options.minLength?this.shown?this.hide():this:(n=e.isFunction(this.source)?this.source(this.query,e.proxy(this.process,this)):this.source,n?this.process(n):this)},process:function(t){var n=this;return t=e.grep(t,function(e){return n.matcher(e)}),t=this.sorter(t),t.length?this.render(t.slice(0,this.options.items)).show():this.shown?this.hide():this},matcher:function(e){return~e.toLowerCase().indexOf(this.query.toLowerCase())},sorter:function(e){var t=[],n=[],r=[],i;while(i=e.shift())i.toLowerCase().indexOf(this.query.toLowerCase())?~i.indexOf(this.query)?n.push(i):r.push(i):t.push(i);return t.concat(n,r)},highlighter:function(e){var t=this.query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&");return e.replace(new RegExp("("+t+")","ig"),function(e,t){return"<strong>"+t+"</strong>"})},render:function(t){var n=this;return t=e(t).map(function(t,r){return t=e(n.options.item).attr("data-value",r),t.find("a").html(n.highlighter(r)),t[0]}),t.first().addClass("active"),this.$menu.html(t),this},next:function(t){var n=this.$menu.find(".active").removeClass("active"),r=n.next();r.length||(r=e(this.$menu.find("li")[0])),r.addClass("active")},prev:function(e){var t=this.$menu.find(".active").removeClass("active"),n=t.prev();n.length||(n=this.$menu.find("li").last()),n.addClass("active")},listen:function(){this.$element.on("blur",e.proxy(this.blur,this)).on("keypress",e.proxy(this.keypress,this)).on("keyup",e.proxy(this.keyup,this)),(e.browser.webkit||e.browser.msie)&&this.$element.on("keydown",e.proxy(this.keydown,this)),this.$menu.on("click",e.proxy(this.click,this)).on("mouseenter","li",e.proxy(this.mouseenter,this))},move:function(e){if(!this.shown)return;switch(e.keyCode){case 9:case 13:case 27:e.preventDefault();break;case 38:e.preventDefault(),this.prev();break;case 40:e.preventDefault(),this.next()}e.stopPropagation()},keydown:function(t){this.suppressKeyPressRepeat=!~e.inArray(t.keyCode,[40,38,9,13,27]),this.move(t)},keypress:function(e){if(this.suppressKeyPressRepeat)return;this.move(e)},keyup:function(e){switch(e.keyCode){case 40:case 38:break;case 9:case 13:if(!this.shown)return;this.select();break;case 27:if(!this.shown)return;this.hide();break;default:this.lookup()}e.stopPropagation(),e.preventDefault()},blur:function(e){var t=this;setTimeout(function(){t.hide()},150)},click:function(e){e.stopPropagation(),e.preventDefault(),this.select()},mouseenter:function(t){this.$menu.find(".active").removeClass("active"),e(t.currentTarget).addClass("active")}},e.fn.typeahead=function(n){return this.each(function(){var r=e(this),i=r.data("typeahead"),s=typeof n=="object"&&n;i||r.data("typeahead",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.typeahead.defaults={source:[],items:8,menu:'<ul class="typeahead dropdown-menu"></ul>',item:'<li><a href="#"></a></li>',minLength:1},e.fn.typeahead.Constructor=t,e(function(){e("body").on("focus.typeahead.data-api",'[data-provide="typeahead"]',function(t){var n=e(this);if(n.data("typeahead"))return;t.preventDefault(),n.typeahead(n.data())})})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.options=e.extend({},e.fn.affix.defaults,n),this.$window=e(window).on("scroll.affix.data-api",e.proxy(this.checkPosition,this)),this.$element=e(t),this.checkPosition()};t.prototype.checkPosition=function(){if(!this.$element.is(":visible"))return;var t=e(document).height(),n=this.$window.scrollTop(),r=this.$element.offset(),i=this.options.offset,s=i.bottom,o=i.top,u="affix affix-top affix-bottom",a;typeof i!="object"&&(s=o=i),typeof o=="function"&&(o=i.top()),typeof s=="function"&&(s=i.bottom()),a=this.unpin!=null&&n+this.unpin<=r.top?!1:s!=null&&r.top+this.$element.height()>=t-s?"bottom":o!=null&&n<=o?"top":!1;if(this.affixed===a)return;this.affixed=a,this.unpin=a=="bottom"?r.top-n:null,this.$element.removeClass(u).addClass("affix"+(a?"-"+a:""))},e.fn.affix=function(n){return this.each(function(){var r=e(this),i=r.data("affix"),s=typeof n=="object"&&n;i||r.data("affix",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.affix.Constructor=t,e.fn.affix.defaults={offset:0},e(window).on("load",function(){e('[data-spy="affix"]').each(function(){var t=e(this),n=t.data();n.offset=n.offset||{},n.offsetBottom&&(n.offset.bottom=n.offsetBottom),n.offsetTop&&(n.offset.top=n.offsetTop),t.affix(n)})})}(window.jQuery);/*!
 * mustache.js - Logic-less {{mustache}} templates with JavaScript
 * http://github.com/janl/mustache.js
 */

/*global define: false*/

(function (root, mustache) {
  if (typeof exports === "object" && exports) {
    module.exports = mustache; // CommonJS
  } else if (typeof define === "function" && define.amd) {
    define(mustache); // AMD
  } else {
    root.Mustache = mustache; // <script>
  }
}(this, (function () {

  var whiteRe = /\s*/;
  var spaceRe = /\s+/;
  var nonSpaceRe = /\S/;
  var eqRe = /\s*=/;
  var curlyRe = /\s*\}/;
  var tagRe = /#|\^|\/|>|\{|&|=|!/;

  var _test = RegExp.prototype.test;
  var _toString = Object.prototype.toString;

  // Workaround for https://issues.apache.org/jira/browse/COUCHDB-577
  // See https://github.com/janl/mustache.js/issues/189
  function testRe(re, string) {
    return _test.call(re, string);
  }

  function isWhitespace(string) {
    return !testRe(nonSpaceRe, string);
  }

  var isArray = Array.isArray || function (obj) {
    return _toString.call(obj) === '[object Array]';
  };

  function escapeRe(string) {
    return string.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&");
  }

  var entityMap = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': '&quot;',
    "'": '&#39;',
    "/": '&#x2F;'
  };

  function escapeHtml(string) {
    return String(string).replace(/[&<>"'\/]/g, function (s) {
      return entityMap[s];
    });
  }

  function Scanner(string) {
    this.string = string;
    this.tail = string;
    this.pos = 0;
  }

  /**
   * Returns `true` if the tail is empty (end of string).
   */
  Scanner.prototype.eos = function () {
    return this.tail === "";
  };

  /**
   * Tries to match the given regular expression at the current position.
   * Returns the matched text if it can match, the empty string otherwise.
   */
  Scanner.prototype.scan = function (re) {
    var match = this.tail.match(re);

    if (match && match.index === 0) {
      this.tail = this.tail.substring(match[0].length);
      this.pos += match[0].length;
      return match[0];
    }

    return "";
  };

  /**
   * Skips all text until the given regular expression can be matched. Returns
   * the skipped string, which is the entire tail if no match can be made.
   */
  Scanner.prototype.scanUntil = function (re) {
    var match, pos = this.tail.search(re);

    switch (pos) {
    case -1:
      match = this.tail;
      this.pos += this.tail.length;
      this.tail = "";
      break;
    case 0:
      match = "";
      break;
    default:
      match = this.tail.substring(0, pos);
      this.tail = this.tail.substring(pos);
      this.pos += pos;
    }

    return match;
  };

  function Context(view, parent) {
    this.view = view || {};
    this.parent = parent;
    this._cache = {};
  }

  Context.make = function (view) {
    return (view instanceof Context) ? view : new Context(view);
  };

  Context.prototype.push = function (view) {
    return new Context(view, this);
  };

  Context.prototype.lookup = function (name) {
    var value = this._cache[name];

    if (!value) {
      if (name == '.') {
        value = this.view;
      } else {
        var context = this;

        while (context) {
          if (name.indexOf('.') > 0) {
            value = context.view;
            var names = name.split('.'), i = 0;
            while (value && i < names.length) {
              value = value[names[i++]];
            }
          } else {
            value = context.view[name];
          }

          if (value != null) break;

          context = context.parent;
        }
      }

      this._cache[name] = value;
    }

    if (typeof value === 'function') value = value.call(this.view);

    return value;
  };

  function Writer() {
    this.clearCache();
  }

  Writer.prototype.clearCache = function () {
    this._cache = {};
    this._partialCache = {};
  };

  Writer.prototype.compile = function (template, tags) {
    var fn = this._cache[template];

    if (!fn) {
      var tokens = mustache.parse(template, tags);
      fn = this._cache[template] = this.compileTokens(tokens, template);
    }

    return fn;
  };

  Writer.prototype.compilePartial = function (name, template, tags) {
    var fn = this.compile(template, tags);
    this._partialCache[name] = fn;
    return fn;
  };

  Writer.prototype.getPartial = function (name) {
    if (!(name in this._partialCache) && this._loadPartial) {
      this.compilePartial(name, this._loadPartial(name));
    }

    return this._partialCache[name];
  };

  Writer.prototype.compileTokens = function (tokens, template) {
    var self = this;
    return function (view, partials) {
      if (partials) {
        if (typeof partials === 'function') {
          self._loadPartial = partials;
        } else {
          for (var name in partials) {
            self.compilePartial(name, partials[name]);
          }
        }
      }

      return renderTokens(tokens, self, Context.make(view), template);
    };
  };

  Writer.prototype.render = function (template, view, partials) {
    return this.compile(template)(view, partials);
  };

  /**
   * Low-level function that renders the given `tokens` using the given `writer`
   * and `context`. The `template` string is only needed for templates that use
   * higher-order sections to extract the portion of the original template that
   * was contained in that section.
   */
  function renderTokens(tokens, writer, context, template) {
    var buffer = '';

    var token, tokenValue, value;
    for (var i = 0, len = tokens.length; i < len; ++i) {
      token = tokens[i];
      tokenValue = token[1];

      switch (token[0]) {
      case '#':
        value = context.lookup(tokenValue);

        if (typeof value === 'object') {
          if (isArray(value)) {
            for (var j = 0, jlen = value.length; j < jlen; ++j) {
              buffer += renderTokens(token[4], writer, context.push(value[j]), template);
            }
          } else if (value) {
            buffer += renderTokens(token[4], writer, context.push(value), template);
          }
        } else if (typeof value === 'function') {
          var text = template == null ? null : template.slice(token[3], token[5]);
          value = value.call(context.view, text, function (template) {
            return writer.render(template, context);
          });
          if (value != null) buffer += value;
        } else if (value) {
          buffer += renderTokens(token[4], writer, context, template);
        }

        break;
      case '^':
        value = context.lookup(tokenValue);

        // Use JavaScript's definition of falsy. Include empty arrays.
        // See https://github.com/janl/mustache.js/issues/186
        if (!value || (isArray(value) && value.length === 0)) {
          buffer += renderTokens(token[4], writer, context, template);
        }

        break;
      case '>':
        value = writer.getPartial(tokenValue);
        if (typeof value === 'function') buffer += value(context);
        break;
      case '&':
        value = context.lookup(tokenValue);
        if (value != null) buffer += value;
        break;
      case 'name':
        value = context.lookup(tokenValue);
        if (value != null) buffer += mustache.escape(value);
        break;
      case 'text':
        buffer += tokenValue;
        break;
      }
    }

    return buffer;
  }

  /**
   * Forms the given array of `tokens` into a nested tree structure where
   * tokens that represent a section have two additional items: 1) an array of
   * all tokens that appear in that section and 2) the index in the original
   * template that represents the end of that section.
   */
  function nestTokens(tokens) {
    var tree = [];
    var collector = tree;
    var sections = [];

    var token;
    for (var i = 0, len = tokens.length; i < len; ++i) {
      token = tokens[i];
      switch (token[0]) {
      case '#':
      case '^':
        sections.push(token);
        collector.push(token);
        collector = token[4] = [];
        break;
      case '/':
        var section = sections.pop();
        section[5] = token[2];
        collector = sections.length > 0 ? sections[sections.length - 1][4] : tree;
        break;
      default:
        collector.push(token);
      }
    }

    return tree;
  }

  /**
   * Combines the values of consecutive text tokens in the given `tokens` array
   * to a single token.
   */
  function squashTokens(tokens) {
    var squashedTokens = [];

    var token, lastToken;
    for (var i = 0, len = tokens.length; i < len; ++i) {
      token = tokens[i];
      if (token) {
        if (token[0] === 'text' && lastToken && lastToken[0] === 'text') {
          lastToken[1] += token[1];
          lastToken[3] = token[3];
        } else {
          lastToken = token;
          squashedTokens.push(token);
        }
      }
    }

    return squashedTokens;
  }

  function escapeTags(tags) {
    return [
      new RegExp(escapeRe(tags[0]) + "\\s*"),
      new RegExp("\\s*" + escapeRe(tags[1]))
    ];
  }

  /**
   * Breaks up the given `template` string into a tree of token objects. If
   * `tags` is given here it must be an array with two string values: the
   * opening and closing tags used in the template (e.g. ["<%", "%>"]). Of
   * course, the default is to use mustaches (i.e. Mustache.tags).
   */
  function parseTemplate(template, tags) {
    template = template || '';
    tags = tags || mustache.tags;

    if (typeof tags === 'string') tags = tags.split(spaceRe);
    if (tags.length !== 2) throw new Error('Invalid tags: ' + tags.join(', '));

    var tagRes = escapeTags(tags);
    var scanner = new Scanner(template);

    var sections = [];     // Stack to hold section tokens
    var tokens = [];       // Buffer to hold the tokens
    var spaces = [];       // Indices of whitespace tokens on the current line
    var hasTag = false;    // Is there a {{tag}} on the current line?
    var nonSpace = false;  // Is there a non-space char on the current line?

    // Strips all whitespace tokens array for the current line
    // if there was a {{#tag}} on it and otherwise only space.
    function stripSpace() {
      if (hasTag && !nonSpace) {
        while (spaces.length) {
          delete tokens[spaces.pop()];
        }
      } else {
        spaces = [];
      }

      hasTag = false;
      nonSpace = false;
    }

    var start, type, value, chr, token;
    while (!scanner.eos()) {
      start = scanner.pos;

      // Match any text between tags.
      value = scanner.scanUntil(tagRes[0]);
      if (value) {
        for (var i = 0, len = value.length; i < len; ++i) {
          chr = value.charAt(i);

          if (isWhitespace(chr)) {
            spaces.push(tokens.length);
          } else {
            nonSpace = true;
          }

          tokens.push(['text', chr, start, start + 1]);
          start += 1;

          // Check for whitespace on the current line.
          if (chr == '\n') stripSpace();
        }
      }

      // Match the opening tag.
      if (!scanner.scan(tagRes[0])) break;
      hasTag = true;

      // Get the tag type.
      type = scanner.scan(tagRe) || 'name';
      scanner.scan(whiteRe);

      // Get the tag value.
      if (type === '=') {
        value = scanner.scanUntil(eqRe);
        scanner.scan(eqRe);
        scanner.scanUntil(tagRes[1]);
      } else if (type === '{') {
        value = scanner.scanUntil(new RegExp('\\s*' + escapeRe('}' + tags[1])));
        scanner.scan(curlyRe);
        scanner.scanUntil(tagRes[1]);
        type = '&';
      } else {
        value = scanner.scanUntil(tagRes[1]);
      }

      // Match the closing tag.
      if (!scanner.scan(tagRes[1])) throw new Error('Unclosed tag at ' + scanner.pos);

      token = [type, value, start, scanner.pos];
      tokens.push(token);

      if (type === '#' || type === '^') {
        sections.push(token);
      } else if (type === '/') {
        // Check section nesting.
        if (sections.length === 0) throw new Error('Unopened section "' + value + '" at ' + start);
        var openSection = sections.pop();
        if (openSection[1] !== value) throw new Error('Unclosed section "' + openSection[1] + '" at ' + start);
      } else if (type === 'name' || type === '{' || type === '&') {
        nonSpace = true;
      } else if (type === '=') {
        // Set the tags for the next time around.
        tags = value.split(spaceRe);
        if (tags.length !== 2) throw new Error('Invalid tags at ' + start + ': ' + tags.join(', '));
        tagRes = escapeTags(tags);
      }
    }

    // Make sure there are no open sections when we're done.
    var openSection = sections.pop();
    if (openSection) throw new Error('Unclosed section "' + openSection[1] + '" at ' + scanner.pos);

    tokens = squashTokens(tokens);

    return nestTokens(tokens);
  }

  var mustache = {};

  mustache.name = "mustache.js";
  mustache.version = "0.7.2";
  mustache.tags = ["{{", "}}"];

  mustache.Scanner = Scanner;
  mustache.Context = Context;
  mustache.Writer = Writer;

  mustache.parse = parseTemplate;

  // Export the escaping function so that the user may override it.
  // See https://github.com/janl/mustache.js/issues/244
  mustache.escape = escapeHtml;

  // All Mustache.* functions use this writer.
  var _writer = new Writer();

  /**
   * Clears all cached templates and partials in the default writer.
   */
  mustache.clearCache = function () {
    return _writer.clearCache();
  };

  /**
   * Compiles the given `template` to a reusable function using the default
   * writer.
   */
  mustache.compile = function (template, tags) {
    return _writer.compile(template, tags);
  };

  /**
   * Compiles the partial with the given `name` and `template` to a reusable
   * function using the default writer.
   */
  mustache.compilePartial = function (name, template, tags) {
    return _writer.compilePartial(name, template, tags);
  };

  /**
   * Compiles the given array of tokens (the output of a parse) to a reusable
   * function using the default writer.
   */
  mustache.compileTokens = function (tokens, template) {
    return _writer.compileTokens(tokens, template);
  };

  /**
   * Renders the `template` with the given `view` and `partials` using the
   * default writer.
   */
  mustache.render = function (template, view, partials) {
    return _writer.render(template, view, partials);
  };

  // This is here for backwards compatibility with 0.4.x.
  mustache.to_html = function (template, view, partials, send) {
    var result = mustache.render(template, view, partials);

    if (typeof send === "function") {
      send(result);
    } else {
      return result;
    }
  };

  return mustache;

}())));
var IRMAURL = new Object();
IRMAURL.base = "/irma_web_service";
IRMAURL.action = IRMAURL.base + "/protocols/verification/SpuitenEnSlikken";
IRMAURL.html = IRMAURL.base + "/irma";
IRMAURL.icon = IRMAURL.base + "/img";
IRMAURL.issuerLogo = IRMAURL.base + "/img/RU_logo_issuer.png";
IRMAURL.verifierLogo = IRMAURL.base + "/img/RU_logo_verifier.png";

var IRMA = {
	irma_aid: 'F849524D4163617264',
	irma_aid_0_7: '49524D4163617264',

	// Target to go to after issuing is done
	after_issue_target: "http://www.ru.nl/cybersecurity",

	irma_issue_state: 'idle',
	issue_url: '',
	issue_data: '',
	responseurl: '',

	card_connected: false,

	// Some state to keep track of what we are verifying now
	current_verification_idx: 0,
	verification_commands: {},
	verification_responses: {},

	verification_names: {},

	Handler: ProxyReader,

	// Can be overridden by implementing pages
	onBackButtonPressed: function() {},

	init: function() {
		IRMA.load_extra_html(IRMAURL.html + "/issue.html");
		IRMA.load_extra_html(IRMAURL.html + "/verify.html");
		IRMA.load_extra_html(IRMAURL.html + "/qr.html");

		// Initialize readers
		ProxyReader.init();
		SmartCardHandler.init();
	},

	bindCallback: function(event, fct) {
		ProxyReader.bind(event, function(data) {fct(data, ProxyReader);});
		SmartCardHandler.bind(event, function(data) {fct(data, SmartCardHandler);});
	},

	createCardInsertedCallback: function(callback) {
		return function(data, handler) {
			IRMA.Handler = handler;
			if(handler === SmartCardHandler) {
				// Card inserted into SmartCardHandler, connect to it
				// FIXME: this would be the place to final fix this
				console.log("Connecting to card for applet");
				SmartCardHandler.connectFirstCard();
			}
			IRMA.card_connected = true;
			callback(data);
		};
	},

	load_extra_html: function(url) {
		$.ajax({
			url: url,
			type: 'GET',
			async: false,
			success: function(res) {
				$('body').prepend(res);
			}
		});
	},

	helper: function(url) {
		$.ajax({
			url: url,
			type: 'POST',
			async: false,
			success: function(res) {
				console.log(res);
			}
		});
	},

	start_verify: function() {
		IRMA.disableVerify(); // Reset state
		console.log("Starting IRMA verification");

		IRMA.setup_qr();
		$("#IRMA_verifier_logo_img").prop("src", IRMAURL.verifierLogo);
		IRMA.show_verify();
		IRMA.retrieve_verifications();

		console.log("Overriding readerfoundCallback");
		IRMA.bindCallback("cardReaderFound", function() {
			$("#qr_overlay").hide();
		});

		// Setup this.Handlers
		IRMA.bindCallback("cardInserted", IRMA.createCardInsertedCallback(function() {
			IRMA.Handler.selectApplet(IRMA.irma_aid, IRMA.enableVerify,
					function() { IRMA.Handler.selectApplet(IRMA.irma_aid_0_7, IRMA.enableVerify,
							function() { IRMA.show_warning("Inserted card is not an IRMA card"); }); });
			IRMA.bindCallback("cardRemoved", function() {
				IRMA.disableVerify();
			});
		}));

		IRMA.bindCallback("timeout", function() {
			// TODO not clear how to handle this in the UI
			console.log("Connection timed out");
		});
	},

	retrieve_verifications: function() {
		console.log("Retrieving verification information");
		$.ajax({
			url: IRMAURL.action,
			contentType: 'application/json',
			type: 'POST',
			success: function(data) {
				console.log("Got data for step 0");
				console.log(data);
				IRMA.responseurl = data.responseurl;
				IRMA.show_verifications(data);
			}
		});
	},

	show_verifications: function(data) {
		IRMA.verification_names = data.info.verification_names;
		$(".IRMA_content_verify_credentials").html("");
		for(var key in IRMA.verification_names) {
			if(IRMA.verification_names.hasOwnProperty(key)) {
				var verification = IRMA.verification_names[key];
				console.log("Hello here: " + verification);
				$(".IRMA_content_verify_credentials").append("<span class=\"IRMA_content_credential\">" + verification + "</span>");
			}
		}
	},

	setup_qr: function() {
		$("#IRMA_button_usephone").on("click",function(event) {
			$("#qr_overlay").show();
		});
	},

	verifyButtonClicked: function(event) {
		$("#IRMA_button_verify").off("click");
		$("#IRMA_button_verify").removeClass("enabled");
		$("#IRMA_button_verify").html("VERIFYING...");

		IRMA.Handler.bind("cardRemoved", function() {});

		$.ajax({
			url : IRMA.responseurl,
			contentType : 'application/json',
			type : 'POST',
			data: "{\"cardVersion\" : \"" + IRMA.Handler.cardVersion + "\"}",
			success: function(data) {
				console.log("Starting verification");
				console.log(data);
				IRMA.verification_responses = {};
				IRMA.verification_commands = IRMA.make_array_from_map(data.commandsSets);
				console.log("Verification commands set to: ", IRMA.verification_commands);
				IRMA.current_verification_idx = 0;
				IRMA.responseurl = data.responseurl;

		    IRMA.Handler.verifyPin(IRMA.verify_start);
			}
		});
	},

	verify_start: function(response) {
		console.log("Pin verified", response);
		if(response.arguments.result === "success") {
      IRMA.verifyStepOne();
		} else {
			// FIXME Do some error handling
			// TODO test blocking pin and feedback for that
		}
	},

	// Select next set of commands to send
	verifyStepOne: function() {
		if(IRMA.current_verification_idx >= IRMA.verification_commands.length) {
			// We are done
			console.log("We are done!");
			console.log(IRMA.verification_responses);
			IRMA.finishVerify(IRMA.verification_responses, IRMA.verification_data);
			return;
		}

		console.log(IRMA.verification_commands);
		var commands = IRMA.verification_commands[IRMA.current_verification_idx];
		IRMA.Handler.sendFeedback("Verifying "
				+ IRMA.verification_names[commands.name], "none");
		IRMA.Handler.transmitCommandSet(commands.value, IRMA.verifyStepTwo);
	},

	// Store the result
	verifyStepTwo: function(responses) {
		var commands = IRMA.verification_commands[IRMA.current_verification_idx];
		console.log("This is what we had to do", commands);
		console.log("This is what we got: ", responses);
		IRMA.verification_responses[commands.name] = responses.arguments.responses;

		// Goto next verification
		IRMA.current_verification_idx++;
		IRMA.verifyStepOne();
	},

	finishVerify: function(responses, data) {
		console.log("Finished IRMA verification");

		// Test whether all communication succeeded
		for(var key in responses) {
			if(responses.hasOwnProperty(key)) {
				var response = responses[key];
				if(response.smartcardstatus === "failed") {
					IRMA.handle_verification_failure(key, response);
					return;
				}
			}
		}

		console.log("Sending handler feedback success");
		IRMA.Handler.sendFeedback("Done", "success");

		// Send results to webserver
		$.ajax({
			url : this.responseurl,
			contentType : 'application/json',
			data : JSON.stringify(responses),
			type : 'POST',
			success : function(data) {
				console.log(data);
				if (data.status === 'success') {
					IRMA.onVerifySuccess(data);
				} else if (data.status === 'error') {
					IRMA.show_failure(data.feedbackMessage, "FAILED");
				} else {
					IRMA.show_failure_credential_not_found();
				}
			}
		});
	},

	handle_verification_failure: function(key, response) {
		console.log("Offending command: " + response['failed-key']);
		var cred_name = IRMA.verification_names[key];
		if(IRMA.is_communication_error(response)) {
			// Lost contact with the card
			IRMA.show_failure("Card Lost", "FAILED");
		} else if (response['failed-key'] === "startprove" && response.startprove.apdu === "6A88") {
			IRMA.show_failure("Credential for " + cred_name + " does not exists.", "FAILED");
		} else {
			IRMA.show_failure("Unknown error verifying " + cred_name, "FAILED");
		}
	},

	is_communication_error: function(response) {
		var key = response['failed-key'];
		return response[key].apdu.indexOf("SCARD_E_NOT_TRANSACTED") != -1;
	},

	start_batch_issue: function(selection, issue_url) {
		$("#IRMA_issuer_logo_img").prop("src", IRMAURL.issuerLogo);
		IRMA.show_issue();
		IRMA.selection = selection;
		IRMA.issue_url = issue_url;

		console.log("Contacting: " + issue_url);
		$.ajax({
		  headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
			url: issue_url,
			data: JSON.stringify(issue_data),
			type: "POST",
			success: IRMA.display_issue_credentials,
		});

		IRMA.bindCallback("cardInserted", IRMA.createCardInsertedCallback(function() {
			IRMA.Handler.selectApplet(IRMA.irma_aid, IRMA.enable_issue, function() {
				IRMA.Handler.selectApplet(IRMA.irma_aid_0_7, IRMA.enable_issue, function() {
					$("#IRMA_status_icon").prop("src", IRMAURL.icon + "/irma_icon_warning_520px.png");
					$("#IRMA_status_text").html("Inserted card is not an IRMA card");
				});
			});
			IRMA.bindCallback("cardRemoved", function() {IRMA.disable_issue();});
		}));

		if(IRMA.card_connected) {
			IRMA.enable_issue();
			IRMA.bindCallback("cardRemoved", function() {IRMA.disable_issue();});
		}
	},

	issue_button_clicked: function(event) {
		console.log("Issue button clicked");
		$("#IRMA_button_issue").off("click");
		$("#IRMA_button_issue").removeClass("enabled");
		$("#IRMA_button_issue").html("ISSUING...");
		IRMA.Handler.bind("cardRemoved", function() {});

		IRMA.irma_issue_state = "issue";
		IRMA.current_credential_idx = 0;
		IRMA.current_credential = IRMA.selection[IRMA.current_credential_idx];

		IRMA.Handler.verifyPin(IRMA.issue_start);
	},

	issue_start: function(response) {
		console.log("Pin verified", response);
		if(response.arguments.result === "success") {
			IRMA.issue_step_one();
		} else {
			// FIXME Do some error handling
			// TODO test blocking pin and feedback for that
		}
	},

	issue_step_one: function() {
		IRMA.issue_set_active(IRMA.current_credential);
		IRMA.issue_set_status(IRMA.current_credential, "Issuing..");
		IRMA.Handler.sendFeedback("Issueing " + IRMA.current_credential, "none");

		$.ajax({
			url: IRMA.issue_url + '/' + IRMA.current_credential + '/1',
			contentType: 'application/json',
			type: 'POST',
			data: "{\"cardVersion\" : \"" + IRMA.Handler.cardVersion + "\"}",
			success: function(data) {
				console.log('Got first batch of data for issuing ' + IRMA.current_credential);
				console.log(data);
				IRMA.responseurl = data.responseurl;

				IRMA.Handler.transmitCommandSet(data.commands, IRMA.issue_step_one_process);
			}
		});
	},

	issue_step_one_process: function(data) {
		var response = data.arguments.responses;
		console.log(response);
		if(response.smartcardstatus === "failed") {
			IRMA.handle_issue_failure(response);
			IRMA.issue_next_credential();
		} else {
			IRMA.issue_step_two(response);
		}
	},

	issue_step_two: function(response) {
		IRMA.issue_set_status(IRMA.current_credential, "Issuing....");
		console.log("Querying response url: " + IRMA.responseurl);
		$.ajax({
			url: IRMA.responseurl,
			contentType: 'application/json',
			data: JSON.stringify(response),
			type: 'POST',
			success: function(data) {
				console.log('Got second batch of data for issuing ' + IRMA.current_credential);
				console.log(data);
				IRMA.responseurl = data.responseurl;

				IRMA.Handler.transmitCommandSet(data.commands, IRMA.issue_step_two_process);
			}
		});
	},

	issue_step_two_process: function(data) {
		var response = data.arguments.responses;
		console.log(response);
		if(response.smartcardstatus === "failed") {
			IRMA.handle_issue_failure(response);
			IRMA.issue_next_credential();
		} else {
			IRMA.issue_step_three(response);
		}
	},

	issue_step_three: function(response) {
		IRMA.issue_set_status(IRMA.current_credential, "Issuing.......");
		$.ajax({
			url: IRMA.responseurl,
			contentType: 'application/json',
			data: JSON.stringify(response),
			type: 'POST',
			success: function(data) {
				console.log('Completed issuance for ' + IRMA.current_credential);
				console.log(data);

				IRMA.issue_set_done(IRMA.current_credential);
				IRMA.issue_next_credential();
			}
		});
	},

	issue_next_credential: function() {
		IRMA.current_credential_idx++;
		if(IRMA.current_credential_idx < IRMA.selection.length) {
			IRMA.current_credential = IRMA.selection[IRMA.current_credential_idx];
			console.log("Now proceeding with credential " + IRMA.current_credential);
			IRMA.issue_step_one();
		} else {
			console.log("Done issuing");
			IRMA.finish_issuing();
		}
	},

	finish_issuing: function() {
		$("#IRMA_button_issue").html("DONE");
		$("#IRMA_button_issue").addClass("enabled");
		IRMA.done();
		$("#IRMA_button_issue").on("click", function(event) {
			window.location = IRMA.after_issue_target;
		});
	},

	done: function() {
		IRMA.Handler.close();
	},

	handle_issue_failure: function(response) {
		console.log("Offending command: " + response['failed-key']);

		if(IRMA.is_communication_error(response)) {
			// Lost contact with the card
			IRMA.issue_set_error(IRMA.current_credential, "Card Lost");

			// Break the chain, no more attempts
			current_credential_idx = IRMA.selection.length;
		} else if (response['failed-key'] === "start_issuance" && response['start_issuance'].apdu === "6986") {
			IRMA.issue_set_error(IRMA.current_credential, "Already issued");
		} else {
			IRMA.issue_set_error(IRMA.current_credential, "Unknown error");
		}
	},

	display_issue_credentials: function(data) {
		console.log(data);

		// First clear display
		$("#IRMA_issue_credential_list_content").empty();

		var credentials = data.info.issue_information;
		for(var i = 0; i < IRMA.selection.length; i++) {
			IRMA.display_issue_credential(credentials[IRMA.selection[i]], IRMA.selection[i]);
		}
	},

	display_issue_credential: function(cred, cred_key) {
		cred.attribute_array = IRMA.make_array_from_map(cred.attributes);
		cred.key = cred_key;
		console.log(cred);
		console.log(Mustache.to_html($("#credAccordionTpl").html(), cred));
		$("#IRMA_issue_credential_list_content").append(Mustache.to_html($("#credAccordionTpl").html(), cred));
	},

	//
	// UI code goes here
	//
	show_verify: function() {
		$("#IRMA_verify").fadeIn();
		$("#IRMA_button_back_verify").on("click", function() {
			// You can handle some internal stuff here if necessary
			IRMA.onBackButtonPressed();
		});
	},

	hide_verify: function() {
		$("#IRMA_verify").fadeOut();
	},

	disableVerify: function () {
		$("#IRMA_status_icon").prop("src", IRMAURL.icon + "/irma_icon_waiting_520px.png");
		$("#IRMA_status_text").html("Insert your IRMA card or use your phone");
		$("#IRMA_button_verify").off("click");
		$("#IRMA_button_verify").removeClass("enabled");
		$("#IRMA_button_verify").html("WAITING FOR CARD...");
	},

	enableVerify: function() {
		$("#IRMA_status_icon").prop("src", IRMAURL.icon + "/irma_icon_ready_520px.png");
		$("#IRMA_status_text").html("Hit 'VERIFY' to check your credential");
		$("#IRMA_button_verify").html("VERIFY");
		$("#IRMA_button_verify").addClass("enabled");
		$("#IRMA_button_verify").on("click", IRMA.verifyButtonClicked);
	},

	show_issue: function() {
		$("#IRMA_issue").fadeIn();
		$("#IRMA_button_back_issue").on("click", function() {
			// You can handle some internal stuff here if necessary
			IRMA.onBackButtonPressed();
		});
	},

	hide_issue: function() {
		$("#IRMA_issue").fadeOut();
	},

	enable_issue: function() {
		$("#IRMA_button_issue").addClass("enabled");
		$("#IRMA_button_issue").html("ISSUE");
		$("#IRMA_button_issue").on('click', IRMA.issue_button_clicked);
	},

	disable_issue: function() {
		$("#IRMA_button_issue").off("click");
		$("#IRMA_button_issue").removeClass("enabled");
		$("#IRMA_button_issue").html("WAITING FOR CARD...");
	},

	onVerifySuccess: function(data) {
		console.log("Internal on verify succes function called");
		$("#IRMA_status_icon").prop("src", IRMAURL.icon + "/irma_icon_ok_520px.png");
		$("#IRMA_status_text").html("Hit 'CONTINUE' to proceed to the website");
		$("#IRMA_button_verify").html("CONTINUE");
		$("#IRMA_button_verify").addClass("enabled");
		$("#IRMA_button_verify").on("click", function(event) {
			IRMA.Handler.close();
			window.location = data.result;
		});
	},

	show_warning: function(text) {
        $("#IRMA_status_icon").prop("src", IRMAURL.icon + "/irma_icon_warning_520px.png");
        $("#IRMA_status_text").html(text);
        IRMA.Handler.sendFeedback(text, "warning");
	},

	show_failure_credential_not_found: function() {
		IRMA.show_failure("Credential not found", "NOT FOUND");
	},

	show_error_connection_lost: function() {
		IRMA.show_error("Connection lost", "COMMUNICATION ERROR");
	},

	show_error: function(text, status) {
		$("#IRMA_status_icon").prop("src", IRMAURL.icon + "/irma_icon_warning_520px.png");
		$("#IRMA_status_text").html(text);
		$("#IRMA_button_verify").html(status);
		IRMA.Handler.sendFeedback(text, "failure");
	},

	show_failure: function(text, status) {
		$("#IRMA_status_icon").prop("src", IRMAURL.icon + "/irma_icon_missing_520px.png");
		$("#IRMA_status_text").html(text);
		IRMA.Handler.sendFeedback(text, "failure");
		$("#IRMA_button_verify").html(status);
	},

	issue_set_status: function(credential, text) {
		IRMA.Handler.sendFeedback(text, "none");
		$("#IRMA-issue-status-" + credential).html("(" + text + ")");
	},

	issue_set_error: function(credential, text) {
		IRMA.issue_set_status(credential, text);
		IRMA.issue_set_failed(credential);
		console.log(credential);
		IRMA.Handler.sendFeedback(text, "failure");
	},

	issue_set_active: function(credential) {
		var heading = $("#IRMA-issue-heading-" + credential);
		heading.removeClass("btn-danger");
		heading.removeClass("btn-success");
		heading.addClass("btn-info");
	},

	issue_set_done: function(credential) {
		IRMA.issue_set_status(credential, "Done");
		var heading = $("#IRMA-issue-heading-" + credential);
		heading.removeClass("btn-info");
		heading.removeClass("btn-danger");
		heading.addClass("btn-success");
	},

	issue_set_failed: function(credential) {
		var heading = $("#IRMA-issue-heading-" + credential);
		heading.removeClass("btn-info");
		heading.removeClass("btn-success");
		heading.addClass("btn-danger");
	},

	// Helpers
	make_array_from_map: function(map) {
		var array = [];
		var i = 0;
		for(var key in map) {
			if(map.hasOwnProperty(key)) {
				array[i] = {name: key, value: map[key]};
				i += 1;
			}
		}
		return array;
	}
};

//$(function() {
//	IRMA.init();
//    IRMA.show();
//});

/**
 * Initialise the IRMA JavaScript components for MediaWiki
 */
function onDocumentReady() {
	ProxyReader.channelBaseURL = "http://irp.vullersweb.nl/create";
	IRMAURL.base = "http://localhost:8080/irma_web_service";
	IRMAURL.action = IRMAURL.base + "/protocols/verification/IRMAWiki";
	IRMAURL.html = "/mediawiki/extensions/IRMA/html";
	IRMAURL.verifierLogo = "/mediawiki/extensions/IRMA/img/IRMAWiki_verifier.png";
	IRMA.init();
	IRMA.onBackButtonPressed = function(data) {
		IRMA.hide_verify();
	}
	$("#verify").on('click', function(event) {
		IRMA.start_verify();
	});
}

$( document ).ready( onDocumentReady );
