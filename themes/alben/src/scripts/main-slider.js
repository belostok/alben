import Swiper from 'swiper';

export default () => {
	const sliderContainers = document.querySelectorAll('.js-main-slider');

	if ( ! sliderContainers || ! sliderContainers.length ) {
		return null;
	}

	let sliders = [];

	sliderContainers.forEach( ( el, index ) => {
		sliders[ index ] = null;
	} );

	sliderContainers.forEach( ( sliderContainer, index ) => {
		if ( sliders[ index ] === null ) {
			const slides     = sliderContainer.querySelectorAll( '.swiper-slide' );
			const isAutoplay = sliderContainer.dataset.autoplay;
			const autoplay   = {
				delay: 5000,
				disableOnInteraction: true
			};
			sliders[ index ] = new Swiper( sliderContainer, {
				centeredSlides: true,
				slidesPerView: 'auto',
				spaceBetween: 10,
				slideToClickedSlide: true,
				loopedSlides: slides.length,
				loop: slides.length > 1,
				autoplay: isAutoplay && slides.length > 1 ? autoplay : false,
			} );
		}
	} );
}
