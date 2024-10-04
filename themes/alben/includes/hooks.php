<?php

namespace albenTheme\Hooks;

use function albenTheme\Helpers\get_array;
use function albenTheme\Helpers\trim_string;

add_action( 'wp_ajax_load_more_images', __NAMESPACE__ . '\\load_more_images' );
add_action( 'wp_ajax_nopriv_load_more_images', __NAMESPACE__ . '\\load_more_images' );

/**
 * Handle the AJAX request for loading images
 * @return void
 */
function load_more_images() {
	if ( ! isset( $_POST['offset'] ) || ! isset( $_POST['limit'] ) || ! isset( $_POST['images'] ) ) {
		wp_send_json_error( 'Invalid parameters' );
	}

	check_ajax_referer( 'alben-nonce', 'nonce' );

	$offset = (int) ( $_POST['offset'] ?? 0 );
	$limit  = (int) ( $_POST['limit'] ?? 0 );
	$images = trim_string( $_POST['images'] ?? '' );

	$images = get_array( json_decode( $images ) );

	if ( empty( $images ) ) {
		wp_send_json_error( 'No images found' );
	}

	$images_to_load = array_slice( $images, $offset, $limit );

	$has_more = ( $offset + $limit ) < count( $images );

	ob_start();
	foreach ( $images_to_load as $image ) : ?>
		<div class="alben-main-gallery__item">
			<?php alben_the_image( $image, 'alben-main-gallery__image' ); ?>
		</div>
	<?php endforeach;
	$html = ob_get_clean();

	wp_send_json_success( [
		'html'     => $html,
		'has_more' => $has_more,
	] );
}
