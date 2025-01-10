<?php
use function albenTheme\Helpers\trim_string;

$logo_title = trim_string( get_field( 'acf_logo_title', 'option' ) );
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'flex' ); ?>>
<?php wp_body_open(); ?>

<div class="main-wrapper flex fdc relative">
	<?php alben_inline_style( 'header' ); ?>
	<header class="alben-header alben-container">
		<div class="wrapper alben-header__wrapper">
			<div class="alben-header__inner flex fdc aic">
				<div class="alben-header__logo-container relative">
					<a href="<?php echo esc_url( home_url() ); ?>" class="alben-header__logo">
						<h1><?php echo esc_html( $logo_title ); ?></h1>
					</a>
				</div>

				<nav class="alben-header__nav flex fwrap js-header-nav">
					<button class="alben-header__menu-button relative js-menu-button">
						<svg class="alben-header__menu-button-image alben-header__menu-button-image_hamburger absolute" width="800px" height="800px" viewBox="0 0 24 24" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M5 6.5H19V8H5V6.5Z" fill="#FFFFFF"/>
							<path d="M5 16.5H19V18H5V16.5Z" fill="#FFFFFF "/>
							<path d="M5 11.5H19V13H5V11.5Z" fill="#FFFFFF "/>
						</svg>
						<svg class="alben-header__menu-button-image alben-header__menu-button-image_close absolute" width="800px" height="800px" viewBox="0 0 24 24" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M12 10.9394L16.9697 5.96961L18.0304 7.03027L13.0606 12L18.0303 16.9697L16.9697 18.0304L12 13.0607L7.03045 18.0302L5.96979 16.9696L10.9393 12L5.96973 7.03042L7.03039 5.96976L12 10.9394Z"
								fill="#FFFFFF "/>
						</svg>
					</button>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header',
							'menu_class'     => 'flex fwrap',
							'container'      => false,
						)
					);
					?>
				</nav>
			</div>
		</div>
	</header>

	<div class="site-content flex">
		<main class="main">
