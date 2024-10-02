<?php

const ALBEN_WP_ENV         = 'development';
const ALBEN_PATH           = __DIR__ . DIRECTORY_SEPARATOR;
const ALBEN_THEME_INCLUDES = ALBEN_PATH . 'includes' . DIRECTORY_SEPARATOR;
const ALBEN_THEME_BLOCKS   = ALBEN_PATH . 'build/blocks/';

define( 'ALBEN_TEMPLATE_URL', get_template_directory_uri() . '/' );
define( 'ALBEN_STYLESHEET_URL', get_stylesheet_uri() );
define( 'ALBEN_THEME_PATH', get_template_directory() . DIRECTORY_SEPARATOR );
define( 'ALBEN_STATIC_MEDIA_URL', get_template_directory_uri() . '/static_media/' );
define( 'ALBEN_IS_MOB', wp_is_mobile() );

global $alben_used_inline_styles;
$alben_used_inline_styles = [];

require_once ALBEN_THEME_INCLUDES . 'acf.php';
require_once ALBEN_THEME_INCLUDES . 'cf7.php';
require_once ALBEN_THEME_INCLUDES . 'cleaner.php';
require_once ALBEN_THEME_INCLUDES . 'content.php';
require_once ALBEN_THEME_INCLUDES . 'content-parts.php';
require_once ALBEN_THEME_INCLUDES . 'core.php';
require_once ALBEN_THEME_INCLUDES . 'cpt.php';
require_once ALBEN_THEME_INCLUDES . 'customizer.php';
require_once ALBEN_THEME_INCLUDES . 'enqueue.php';
require_once ALBEN_THEME_INCLUDES . 'helpers.php';
require_once ALBEN_THEME_INCLUDES . 'media.php';
require_once ALBEN_THEME_INCLUDES . 'media-svg.php';
require_once ALBEN_THEME_INCLUDES . 'shortcodes.php';
require_once ALBEN_THEME_INCLUDES . 'taxonomies.php';

albenTheme\ACF\start();
albenTheme\CF7\start();
albenTheme\Cleaner\start();
albenTheme\Content\start();
albenTheme\Core\start();
albenTheme\CPT\start();
albenTheme\Customizer\start();
albenTheme\Enqueue\start();
albenTheme\Media\start();
albenTheme\MediaSVG\start();
albenTheme\Shortcodes\start();
albenTheme\Taxonomies\start();

// Require Composer autoloader if it exists
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}
