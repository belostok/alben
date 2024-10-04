<?php
/*
Template Name: Absence
*/

use function albenTheme\Helpers\get_array;
use function albenTheme\Helpers\trim_string;

$images = get_array( get_field( 'acf_photos' ) );

get_header();

alben_inline_style( 'absence-slider' );
?>

	<section class="page-content">
		<div class="wrapper">
			<div class="entry-content">
				<?php if ( ! empty( $images ) ) : ?>
					<div class="alben-absence-slider">
						<div class="alben-absence-slider__slider js-absence-slider">
							<div class="alben-absence-slider__slider-wrapper swiper-wrapper">
								<?php
								foreach ( $images as $image ) :
									$name = trim_string( get_field( 'acf_image_name', $image ) );
									$place = trim_string( get_field( 'acf_image_place', $image ) );
									?>
									<div class="alben-absence-slider__slide swiper-slide">
										<div class="alben-absence-slider__image-container img-contain">
											<?php alben_the_image( $image, 'alben-absence-slider__image' ); ?>
										</div>
										<div class="alben-absence-slider__footer flex fwrap jcspb">
											<?php if ( $name || $place ) : ?>
												<div class="alben-absence-slider__name-section">
													<?php if ( $name ) : ?>
														<div class="alben-absence-slider__name-container">
															<h3 class="alben-absence-slider__name">
																<?php echo esc_html( $name ); ?>
															</h3>
														</div>
													<?php endif; ?>
													<?php if ( $place ) : ?>
														<div class="alben-absence-slider__place-container">
															<h4 class="alben-absence-slider__place">
																<?php echo esc_html( $place ); ?>
															</h4>
														</div>
													<?php endif; ?>
												</div>
											<?php endif; ?>
											<div class="alben-absence-slider__nav-section flex aic fwrap">
												<button
													class="alben-absence-slider__play-button relative js-play-button default-hover">
													<span
														class="alben-absence-slider__play-button-image alben-absence-slider__play-button-image_play img-contain absolute">
														<svg fill="#000000" height="800px" width="800px" version="1.1"
															id="Capa_1" xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink"
															viewBox="0 0 17.804 17.804" xml:space="preserve">
															<g>
																<g id="c98_play">
																	<path d="M2.067,0.043C2.21-0.028,2.372-0.008,2.493,0.085l13.312,8.503c0.094,0.078,0.154,0.191,0.154,0.313
																		c0,0.12-0.061,0.237-0.154,0.314L2.492,17.717c-0.07,0.057-0.162,0.087-0.25,0.087l-0.176-0.04
																		c-0.136-0.065-0.222-0.207-0.222-0.361V0.402C1.844,0.25,1.93,0.107,2.067,0.043z"/>
																</g>
																<g id="Capa_1_78_">
																</g>
															</g>
														</svg>
													</span>
													<span class="alben-absence-slider__play-button-image alben-absence-slider__play-button-image_pause img-contain absolute">
														<svg width="800px" height="800px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M7 1H2V15H7V1Z" fill="#000000"/>
														<path d="M14 1H9V15H14V1Z" fill="#000000"/>
														</svg>
													</span>
												</button>

												<div class="alben-absence-slider__nav-side flex jcspb aic">
													<button
														class="alben-nav alben-absence-slider__nav alben-absence-slider__nav_next js-absence-nav-next default-hover img-contain">
														<svg fill="currentColor" stroke="none" width="15" height="27"
															viewBox="0 0 15 27">
															<g fill-rule="evenodd">
																<path fill-rule="nonzero"
																	d="M.198 25.926l1.06 1.06 13.259-13.258L1.258.47.198 1.53l12.197 12.198z"></path>
															</g>
														</svg>
													</button>

													<div class="alben-absence-slider__pagination js-pagination"></div>

													<button
														class="alben-nav alben-absence-slider__nav alben-absence-slider__nav_prev js-absence-nav-prev default-hover img-contain">
														<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
															stroke="none" width="15" height="27"
															viewBox="0 0 15 27">
															<g fill-rule="evenodd">
																<path fill-rule="nonzero"
																	d="M14.258 1.53L13.198.47-.061 13.728l13.259 13.258 1.06-1.06L2.061 13.728z"></path>
															</g>
														</svg>
													</button>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<div class="alben-absence-content">
					<?php the_content(); ?>
				</div>

			</div>
		</div>
	</section>

<?php
get_footer();
