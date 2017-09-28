<?php /*Template Name: Portfolio*/ ?>

<?php get_header(); ?>

<section id="portfolio">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row text-center caption">
					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
						<h2>Portfolio</h2>
					</div>
				</div>
				<div class="row slider-container">
					<div class="row text-center">
						<?php 
						$args = array( 'hide_empty=0' );
						$terms = get_terms('portfolio_category', $args);


						if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
							$count = count($terms);
							$i=0;
							$term_list = '<ul class="single-item-info">';
							foreach ($terms as $term) {
								$i++;
								$term_list .= '<li><a href="' . get_term_link( $term ) . '" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a></li>';
								if ($count != $i) {
									$term_list .= ' / ';
								}
								else {
									$term_list .= '</ul>';
								}
							}
							echo $term_list;
						}
						?>
						
					</div>

					<div class="row">
						<div class="single-item">
							<div class="slide">
								<?php
								$classRow = "row";
								if ($key_item % 2) {
									$classRow .= " flex-rewers";
								}
								?>
								<div class="<?php echo $classRow; ?>">

									<?php foreach( $terms as $term ) {
										$args = array('post_type' => 'portfolio',
														'portfolio_category' => $term->slug);
										$query = new WP_Query( $args );
										while ( $query->have_posts() ) : $query->the_post(); ?>

										<div class="col-xs-12 col-sm-4">
											<div class="img-container">
												<?php $attr = array(
												'class' => "archive-image",
												'alt' => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
												); ?>
												<div class="img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', $attr ); ?></a></div>
												<div class="img-hover">
													<a href="#" class="md-trigger" data-modal="galery-modal-1">
														<p>Item name</p>
														<img src="img/plus.png" alt="plus">
													</a>
												</div>
											</div>
										</div>

										

									<?php endwhile; wp_reset_postdata();

								} ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>