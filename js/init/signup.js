
var start_issuance = function(data) {
	console.log(data);
	var credentials = data.info.issue_information;
	console.log(credentials);
	IRMA.hide_verify();
	IRMA.start_batch_issue(Object.keys(credentials), issue_url);
}

/**
 * Initialise the IRMA JavaScript components for MediaWiki
 */
function onDocumentReady() {
	ProxyReader.channelBaseURL = "http://irp.vullersweb.nl/create";
	IRMA.base_url = "http://localhost:8080/irma_web_service/protocols/verification/IRMAWikiRegistration";
	IRMA.irma_html = "/mediawiki/extensions/IRMA/skin/html/";
	IRMA.verifier_logo = "/mediawiki/extensions/IRMA/skin/img/IRMAWiki_verifier.png";
	IRMA.issuer_logo = "/mediawiki/extensions/IRMA/skin/img/IRMAWiki_issuer.png";

	var path = document.location.pathname;
	var rootpath = path.substring(0, path.lastIndexOf('/'))
	IRMA.after_issue_target = rootpath;

	IRMA.init();

	IRMA.onVerifySuccess = function(data) {
		console.log(data);
		var issueData = new Object();
    issueData.nickname = $("#wpName2").attr("value");
    issueData.realname = $("#wpRealName").attr("value");
    console.log(issueData);
		issue_url = data.result;
		issue_data = issueData;
		$.ajax({
		  headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
			url: data.result,
			data: JSON.stringify(issueData),
			type: 'POST',
			success: start_issuance,
		});
	}

	IRMA.onBackButtonPressed = function(data) {
		IRMA.hide_verify();
		IRMA.hide_issue();
	}

	$("#wpCreateaccount").on('click', function(event) {
		IRMA.start_verify();
		return false;
	});
	$("#userlogin2").on('submit', function(event) {
		IRMA.start_verify();
		return false;
	});

}

$( document ).ready( onDocumentReady );
