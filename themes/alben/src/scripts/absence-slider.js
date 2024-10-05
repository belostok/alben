import Swiper, { Navigation, Pagination, Autoplay, EffectFade } from 'swiper';

Swiper.use( [ Navigation, Pagination, Autoplay, EffectFade ] );

export default () => {
	const slider     = document.querySelector( '.js-absence-slider' );
	const playButton = document.querySelector( '.js-play-button' );
	const pauseCl    = 'alben-absence-slider__play-button_pause';

	if ( ! slider ) {
		return null;
	}

	const slides   = slider.querySelectorAll( '.swiper-slide' );
	const autoplay = {
		delay: 5000,
		disableOnInteraction: false
	};
	const swiper   = new Swiper( slider, {
		slidesPerView: 1,
		loop: true,
		// effect: 'fade',
		// fadeEffect: {
		// 	crossFade: true
		// },
		autoplay: slides.length > 1 ? autoplay : false,
		navigation: {
			nextEl: '.js-absence-nav-prev',
			prevEl: '.js-absence-nav-next'
		},
		pagination: {
			el: '.js-pagination',
			type: 'custom',
			renderCustom: function( swiper, current, total ) {
				return current + '/' + total;
			}
		}
	} );

	if ( ! playButton ) {
		return null;
	}

	playButton.addEventListener( 'click', () => {
		if ( playButton.classList.contains( pauseCl ) ) {
			swiper.autoplay.start();
			playButton.classList.remove( pauseCl );
		} else {
			swiper.autoplay.stop();
			playButton.classList.add( pauseCl );
		}
	} );
}
