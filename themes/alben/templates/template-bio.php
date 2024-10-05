<?php
/*
Template Name: Bio
*/

get_header();

alben_inline_style( 'bio' );
?>

<section class="page-content">
	<div class="wrapper">
		<div class="entry-content">
			<div class="alben-bio alben-text-format">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
