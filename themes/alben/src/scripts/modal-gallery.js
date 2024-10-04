import Swiper, { Navigation } from 'swiper';

Swiper.use( [ Navigation ] );

export default () => {
	const items = document.querySelectorAll( '.alben-main-gallery__item' );
	const modal = document.querySelector( '.js-gallery-modal' );

	if ( ! items || ! items.length || ! modal ) {
		return null;
	}

	const swiperWrapper = modal.querySelector( '.swiper-wrapper' );
	const closeButton   = modal.querySelector( '.js-modal-close' );
	let slider;
	const activeCl      = 'alben-gallery-modal_active';

	if ( ! swiperWrapper ) {
		return null;
	}

	items.forEach( ( item, index ) => {
		item.addEventListener( 'click', function() {
			slider = new Swiper( '.js-modal-slider', {
				loop: true,
				initialSlide: index,
				navigation: {
					nextEl: '.js-nav-prev',
					prevEl: '.js-nav-next'
				}
			} );

			modal.classList.add( activeCl );
			document.body.style.overflow = 'hidden';
		} );
	} );

	if ( closeButton ) {
		closeButton.addEventListener( 'click', function() {
			modal.classList.remove( activeCl );
			document.body.removeAttribute( 'style' );
			slider.destroy();
		} );
	}

	window.addEventListener( 'click', function( event ) {
		if ( event.target === modal ) {
			modal.classList.remove( activeCl );
			document.body.removeAttribute( 'style' );
			slider.destroy();
		}
	} );
}
