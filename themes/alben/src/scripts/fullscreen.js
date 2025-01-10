export default () => {
	const modal    = document.querySelector( '.js-gallery-modal' );
	const button   = modal?.querySelector( '.js-modal-fullscreen' );
	const close    = modal?.querySelector( '.js-modal-close' );
	const buttonCl = 'alben-gallery-modal__fullscreen-button_active';

	if ( ! button || ! close ) {
		return null;
	}

	const toggleFullscreen = () => {
		if ( ! document.fullscreenElement ) {
			// Enter fullscreen mode
			if ( modal.requestFullscreen ) {
				modal.requestFullscreen();
			} else if ( modal.mozRequestFullScreen ) {
				modal.mozRequestFullScreen(); // Firefox
			} else if ( modal.webkitRequestFullscreen ) {
				modal.webkitRequestFullscreen(); // Chrome, Safari, and Opera
			} else if ( modal.msRequestFullscreen ) {
				modal.msRequestFullscreen(); // IE/Edge
			}
		} else if ( document.fullscreenElement === modal ) {
			// Exit fullscreen mode
			if ( document.exitFullscreen ) {
				document.exitFullscreen();
			} else if ( document.mozCancelFullScreen ) {
				document.mozCancelFullScreen(); // Firefox
			} else if ( document.webkitExitFullscreen ) {
				document.webkitExitFullscreen(); // Chrome, Safari, and Opera
			} else if ( document.msExitFullscreen ) {
				document.msExitFullscreen(); // IE/Edge
			}
		}
	};

	// Add click event listener for the fullscreen button
	button.addEventListener( 'click', toggleFullscreen );

	// Listen for fullscreen changes
	document.addEventListener( 'fullscreenchange', () => {
		if ( document.fullscreenElement === modal ) {
			// When entering fullscreen
			close.style.display = 'none';
			button.classList.add( buttonCl );
		} else {
			// When exiting fullscreen
			close.style.display = '';
			button.classList.remove( buttonCl );
		}
	} );
};
