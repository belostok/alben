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

				<nav class="alben-header__nav flex fwrap">
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
