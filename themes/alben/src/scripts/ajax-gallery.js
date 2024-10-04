import { buildImages } from './helpers';

export default () => {
	const gallery = document.querySelector( '.js-gallery' );

	if ( ! gallery ) {
		return null;
	}

	let offset    = parseInt( gallery.getAttribute( 'data-offset' ) );
	const limit   = parseInt( gallery.getAttribute( 'data-limit' ) );
	const images  = gallery.getAttribute( 'data-items' );
	let isLoading = false;

	function isNearBottom() {
		return window.innerHeight + window.scrollY >= document.body.offsetHeight - 800;
	}

	function loadMoreImages() {

		if ( isLoading ) {
			return null;
		}
		isLoading = true;

		offset += limit;

		fetch( alben_ajax.url, {
			method: 'POST', headers: {
				'Content-Type': 'application/x-www-form-urlencoded'
			}, body: new URLSearchParams( {
				action: 'load_more_images', nonce: alben_ajax.nonce, offset, limit, images
			} )
		} )
			.then( response => response.json() )
			.then( response => {

				if ( response.success ) {
					gallery.innerHTML += response.data.html;

					buildImages( gallery );

					if ( ! response.data.has_more ) {
						window.removeEventListener( 'scroll', onScroll );
					}
				}
				isLoading = false;
			} )
			.catch( error => {
				console.error( 'Error loading images:', error );
				isLoading = false;
			} );
	}

	function onScroll() {
		if ( isNearBottom() ) {
			loadMoreImages();
		}
	}

	window.addEventListener( 'scroll', onScroll );
}
