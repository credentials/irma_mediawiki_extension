
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
