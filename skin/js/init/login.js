
/**
 * Initialise the IRMA JavaScript components for MediaWiki
 */
function onDocumentReady() {
	ProxyReader.channelBaseURL = "http://irp.vullersweb.nl/create";
	IRMA.base_url = "http://localhost:8080/irma_web_service/protocols/verification/IRMAWiki";
	IRMA.irma_html = "/mediawiki/extensions/IRMA/skin/html/";
	IRMA.verifier_logo = "/mediawiki/extensions/IRMA/skin/img/IRMAWiki_verifier.png";
	IRMA.init();
	IRMA.onBackButtonPressed = function(data) {
		IRMA.hide_verify();
	}
	$("#verify").on('click', function(event) {
		IRMA.start_verify();
	});
}

$( document ).ready( onDocumentReady );
