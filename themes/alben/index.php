<?php
/**
 * The main template file
 */

use albenTheme\Constants\Constants;
use function albenTheme\Helpers\get_array;

$images = get_array( get_field( 'acf_photos' ) );
$limit_images = ! empty( $images ) ? array_slice( $images, 0, Constants::GALLERY_LIMIT ) : array();

get_header();

alben_inline_style( 'main-gallery' );
?>

<section class="page-content">
	<div class="wrapper">
		<div class="entry-content">
			<?php if ( ! empty( $images ) ) : ?>
				<div class="alben-main-gallery">
					<div
						class="alben-main-gallery__items js-gallery"
						<?php if ( count( $images ) > Constants::GALLERY_LIMIT ) : ?>
							data-limit="<?php echo esc_attr( Constants::GALLERY_LIMIT );?>"
							data-offset="0"
							data-items="<?php echo wp_json_encode( $images ); ?>"
						<?php endif; ?>
					>
						<?php foreach ( $limit_images as $image ) : ?>
							<div class="alben-main-gallery__item">
								<?php alben_the_image( $image, 'alben-main-gallery__image' ); ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php
get_footer();
