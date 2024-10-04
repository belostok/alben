export default () => {
	const modal  = document.querySelector( '.js-gallery-modal' );
	const button = modal?.querySelector( '.js-modal-fullscreen' );

	if ( ! button ) {
		return null;
	}

	button.addEventListener( 'click', () => {
		if ( modal.requestFullscreen ) {
			modal.requestFullscreen();
		} else if ( modal.mozRequestFullScreen ) { // Firefox
			modal.mozRequestFullScreen();
		} else if ( modal.webkitRequestFullscreen ) { // Chrome, Safari and Opera
			modal.webkitRequestFullscreen();
		} else if ( modal.msRequestFullscreen ) { // IE/Edge
			modal.msRequestFullscreen();
		}
	} );
}
