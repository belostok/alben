<?php

use function albenTheme\Helpers\get_array;

$images = get_array( get_field( 'acf_photos' ) );

if ( empty( $images ) ) {
	return null;
}
?>

<div class="alben-gallery-modal js-gallery-modal">
	<div class="alben-gallery-modal__wrapper">
		<button class="alben-gallery-modal__close-button js-modal-close img-contain default-hover">
			<svg width="800px" height="800px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M3 21.32L21 3.32001" stroke="#000000" stroke-width="1.5" stroke-linecap="round"
					stroke-linejoin="round"/>
				<path d="M3 3.32001L21 21.32" stroke="#000000" stroke-width="1.5" stroke-linecap="round"
					stroke-linejoin="round"/>
			</svg>
		</button>
		<button class="alben-gallery-modal__fullscreen-button js-modal-fullscreen img-contain default-hover">
			<svg class="alben-gallery-modal__fullscreen-button-open" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M21.7092 2.29502C21.8041 2.3904 21.8757 2.50014 21.9241 2.61722C21.9727 2.73425 21.9996 2.8625 22 2.997L22 3V9C22 9.55228 21.5523 10 21 10C20.4477 10 20 9.55228 20 9V5.41421L14.7071 10.7071C14.3166 11.0976 13.6834 11.0976 13.2929 10.7071C12.9024 10.3166 12.9024 9.68342 13.2929 9.29289L18.5858 4H15C14.4477 4 14 3.55228 14 3C14 2.44772 14.4477 2 15 2H20.9998C21.2749 2 21.5242 2.11106 21.705 2.29078L21.7092 2.29502Z"
					fill="#000000"/>
				<path
					d="M10.7071 14.7071L5.41421 20H9C9.55228 20 10 20.4477 10 21C10 21.5523 9.55228 22 9 22H3.00069L2.997 22C2.74301 21.9992 2.48924 21.9023 2.29502 21.7092L2.29078 21.705C2.19595 21.6096 2.12432 21.4999 2.07588 21.3828C2.02699 21.2649 2 21.1356 2 21V15C2 14.4477 2.44772 14 3 14C3.55228 14 4 14.4477 4 15V18.5858L9.29289 13.2929C9.68342 12.9024 10.3166 12.9024 10.7071 13.2929C11.0976 13.6834 11.0976 14.3166 10.7071 14.7071Z"
					fill="#000000"/>
			</svg>
			<svg class="alben-gallery-modal__fullscreen-button-close" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M21.7071 3.70711L16.4142 9H20C20.5523 9 21 9.44772 21 10C21 10.5523 20.5523 11 20 11H14.0007L13.997 11C13.743 10.9992 13.4892 10.9023 13.295 10.7092L13.2908 10.705C13.196 10.6096 13.1243 10.4999 13.0759 10.3828C13.0273 10.2657 13.0004 10.1375 13 10.003L13 10V4C13 3.44772 13.4477 3 14 3C14.5523 3 15 3.44772 15 4V7.58579L20.2929 2.29289C20.6834 1.90237 21.3166 1.90237 21.7071 2.29289C22.0976 2.68342 22.0976 3.31658 21.7071 3.70711Z"
					fill="#000000"/>
				<path
					d="M9 20C9 20.5523 9.44772 21 10 21C10.5523 21 11 20.5523 11 20V14.0007C11 13.9997 11 13.998 11 13.997C10.9992 13.7231 10.8883 13.4752 10.7092 13.295C10.7078 13.2936 10.7064 13.2922 10.705 13.2908C10.6096 13.196 10.4999 13.1243 10.3828 13.0759C10.2657 13.0273 10.1375 13.0004 10.003 13C10.002 13 10.001 13 10 13H4C3.44772 13 3 13.4477 3 14C3 14.5523 3.44772 15 4 15H7.58579L2.29289 20.2929C1.90237 20.6834 1.90237 21.3166 2.29289 21.7071C2.68342 22.0976 3.31658 22.0976 3.70711 21.7071L9 16.4142V20Z"
					fill="#000000"/>
			</svg>
		</button>
		<div class="alben-gallery-modal__slider js-modal-slider">
			<div class="alben-gallery-modal__slider-wrapper swiper-wrapper">
				<?php foreach ( $images as $image ): ?>
					<div class="alben-gallery-modal__slide swiper-slide img-contain">
						<?php alben_the_image( $image, 'alben-gallery-modal__image' ) ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<button class="alben-nav alben-gallery-modal__nav alben-gallery-modal__nav_prev js-nav-prev default-hover">
			<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none" width="15" height="27"
				viewBox="0 0 15 27">
				<g fill-rule="evenodd">
					<path fill-rule="nonzero"
						d="M14.258 1.53L13.198.47-.061 13.728l13.259 13.258 1.06-1.06L2.061 13.728z"></path>
				</g>
			</svg>
		</button>
		<button class="alben-nav alben-gallery-modal__nav alben-gallery-modal__nav_next js-nav-next default-hover">
			<svg fill="currentColor" stroke="none" width="15" height="27" viewBox="0 0 15 27">
				<g fill-rule="evenodd">
					<path fill-rule="nonzero"
						d="M.198 25.926l1.06 1.06 13.259-13.258L1.258.47.198 1.53l12.197 12.198z"></path>
				</g>
			</svg>
		</button>
	</div>
</div>
