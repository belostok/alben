<?php
/*
Template Name: Contacts
*/

use function albenTheme\Helpers\trim_string;
use function albenTheme\Helpers\get_array;

$image  = get_post_thumbnail_id();
$name   = trim_string( get_field( 'acf_contacts_name' ) );
$phone  = trim_string( get_field( 'acf_phone', 'option' ) );
$tel    = $phone ? str_replace( array( ' ', '-', '(', ')' ), array( '', '', '', '' ), $phone ) : '';
$email  = trim_string( get_field( 'acf_email', 'option' ) );
$social = get_array( get_field( 'acf_social', 'option' ) );

get_header();

alben_inline_style( 'contacts' );
?>

<section class="page-content">
	<div class="wrapper">
		<div class="entry-content">
			<div class="alben-contacts flex">
				<div class="alben-contacts__form-section">
					<?php if ( $name ) : ?>
						<div class="alben-contacts__name-container">
							<h1 class="alben-contacts__name"><?php echo esc_html( $name ); ?></h1>
						</div>
					<?php endif; ?>
					<?php if ( $phone ) : ?>
						<div class="alben-contacts__phone-container">
							<a class="alben-contacts__phone default-hover" href="<?php echo 'tel:' . esc_attr( $tel ); ?>">
								<?php echo esc_html( $phone ); ?>
							</a>
						</div>
					<?php endif; ?>
					<?php if ( $email ) : ?>
						<div class="alben-contacts__email-container">
							<a class="alben-contacts__email default-hover" href="<?php echo 'mailto:' . esc_attr( $email ); ?>">
								<?php echo esc_html( $email ); ?>
							</a>
						</div>
					<?php endif; ?>
					<?php if ( ! empty( $social ) ) : ?>
							<div class="alben-contacts__social-items flex fwrap">
							<?php
							foreach ( $social as $item ) :
								$icon = (int) ( $item['icon'] ?? 0 );
								$link = trim_string( $item['link'] ?? '' );

								if ( ! $icon || ! $link ) {
									continue;
								}
								?>
								<a href="<?php echo esc_url( $link ); ?>" target="_blank" class="alben-contacts__social-item img-contain default-hover">
									<?php alben_the_image( $icon, 'alben-contacts__social-icon' ); ?>
								</a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					<div class="alben-contacts__form-container">
						<?php echo do_shortcode( '[contact-form-7 id="c1ac29d" title="Contacts form"]' ); ?>
					</div>
				</div>
				<div class="alben-contacts__image-container">
					<?php
					if ( $image ) {
						alben_the_image( $image, 'alben-contacts__image' );
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
