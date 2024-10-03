<?php
/**
 * The front page template file
 */

use function albenTheme\Helpers\get_array;

$images = get_array( get_field( 'acf_photos' ) );

get_header();

alben_inline_style( 'main-slider' );
?>

<section class="page-content">
	<div class="wrapper">
		<div class="entry-content">
			<?php if ( ! empty( $images ) ) : ?>
				<div class="alben-main-slider">
					<div class="alben-main-slider__slider js-main-slider">
						<div class="alben-main-slider__slider-wrapper swiper-wrapper">
							<?php foreach ( $images as $image ) : ?>
								<div class="alben-main-slider__slide swiper-slide">
									<?php alben_the_image( $image, 'alben-main-slider__image' ); ?>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php
get_footer();
