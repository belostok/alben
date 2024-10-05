<?php
use function albenTheme\Helpers\get_array;
use function albenTheme\Helpers\trim_string;

$social    = get_array( get_field( 'acf_social', 'option' ) );
$email     = trim_string( get_field( 'acf_email', 'option' ) );
$phone     = trim_string( get_field( 'acf_phone', 'option' ) );
$tel       = $phone ? str_replace( array( ' ', '-', '(', ')' ), array( '', '', '', '' ), $phone ) : '';
$copyright = trim_string( get_field( 'acf_copyright', 'option' ) );
$copyright = $copyright ? do_shortcode( $copyright ) : '';
?>

</main><!-- /.main -->
</div><!-- /.site-content -->

<?php alben_inline_style( 'footer' ); ?>
<footer class="alben-footer alben-container">
	<div class="wrapper alben-footer__wrapper flex fdc aic">
		<?php if ( ! is_page_template( 'templates/template-contacts.php' ) ) : ?>
			<div class="alben-footer__form-container">
				<?php echo do_shortcode( '[contact-form-7 id="0ba3d6d" title="Footer form"]' ); ?>
			</div>
			<?php if ( ! empty( $social ) ) : ?>
				<div class="alben-footer__social-container">
					<div class="alben-footer__social-items flex fwrap jcc">
						<?php
						foreach ( $social as $item ) :
							$icon = (int) ( $item['icon'] ?? 0 );
							$link = trim_string( $item['link'] ?? '' );

							if ( ! $icon || ! $link ) {
								continue;
							}
							?>
							<a href="<?php echo esc_url( $link ); ?>" target="_blank" class="alben-footer__social-item img-contain default-hover">
								<?php alben_the_image( $icon, 'alben-footer__social-icon' ); ?>
							</a>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if ( $email || $phone ) : ?>
				<div class="alben-footer__contacts-container flex fwrap jcc aic">
					<?php if ( $phone ) : ?>
						<div class="alben-footer__phone-container">
							<a class="alben-footer__phone default-hover" href="<?php echo 'tel:' . esc_attr( $tel ); ?>">
								<?php echo esc_html( $phone ); ?>
							</a>
						</div>
					<?php endif; ?>
					<?php if ( $email ) : ?>
						<div class="alben-footer__email-container">
							<a class="alben-footer__email default-hover" href="<?php echo 'mailto:' . esc_attr( $email ); ?>">
								<?php echo esc_html( $email ); ?>
							</a>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( $copyright ) : ?>
			<div class="alben-footer__copyright-container flex jcc">
				<span class="alben-footer__copyright"><?php echo esc_html( $copyright ); ?></span>
			</div>
		<?php endif; ?>
	</div>
</footer><!-- /.footer -->

<?php
if (
	! is_front_page() &&
	! is_page_template( 'templates/template-absence.php' ) &&
	! is_page_template( 'templates/template-contacts.php' ) &&
	! is_page_template( 'templates/template-bio.php' )
) {
	get_template_part( 'partials/gallery-modal' );
}
?>

</div><!-- /.main-wrapper -->
<?php wp_footer(); ?>

</body>
</html>
