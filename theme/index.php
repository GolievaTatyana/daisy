<?php $templateUri = get_template_directory_uri();?>

<?php get_header(); ?>

<section id="portfolio" class="portfolio-category">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<?php
					$arg_posts =  array(
						'post_type' => 'portfolio',
						// 'order' => 'ASC',
						'posts_per_page'  => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'portfolio_category',
								'field'    => 'name',
								'terms'    => get_query_var( 'portfolio_category' ),
							)
						)
					);

					$query = new WP_Query( $arg_posts );
				?>

				<?php if ($query->have_posts() ): ?>
					<?php $postCounter = 0; ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<?php if ($postCounter % 6 === 0):?>
							<div class="slide">
								<div class="row">
						<?php elseif ($postCounter % 6 === 3): ?>
								<div class="row flex-rewers">
						<?php endif;?>

						<?php if ($postCounter % 3 === 0): ?>
									<div class="col-xs-12 col-sm-6">
						<?php else: ?>
									<div class="col-xs-6 col-sm-3">
						<?php endif; ?>

										<div class="img-container">
											<div class="img">
												<a href="<?php the_permalink(); ?>">
													<?php the_post_thumbnail( 'widgetfull' );?>
												</a>
											</div>
											<div class="img-hover">
												<a href="#" class="md-trigger" data-modal="galery-modal-2">
													<p><?php the_title(); ?></p>
													<img src="<?php echo $templateUri; ?>/img/plus.png" alt="plus">
												</a>
											</div>
										</div>
									</div>

							<?php if ($postCounter % 6 === 2): ?>
									</div>
							<?php elseif ($postCounter % 6 === 5): ?>
									</div>
								</div>
							<?php endif; ?>

							<?php $postCounter++; ?>
					<?php endwhile; ?>

					<?php if ($postCounter % 3 !== 0): ?>
									</div>
					<?php endif; ?>
					<?php if ($postCounter % 6 !== 0): ?>
								</div>
					<?php endif; ?>

					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
