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
				<ul class="single-item-info">
					<?php
					$categories = get_categories(array(
					'type'         => 'post',
					'child_of'     => 0,
					'parent'       => '',
					'orderby'      => 'name',
					'order'        => 'ASC',
					'hide_empty'   => 1,
					'hierarchical' => 0,
					'exclude'      => '',
					'include'      => '',
					'number'       => 0,
					'taxonomy'     => 'portfolio_category',
					'pad_counts'   => false,
					));
					foreach( $categories as $category ){
						echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </li> ';
					}
					?>
				</ul>
				<div class="row slider-container">
					<div class="row text-center">
						<?php $args = array( 'post_type' => 'portfolio' ); ?>
						<?php $my_query = new WP_Query( $args ); ?>
						<?php if ( $my_query->have_posts() ) : ?>
							<?php while ( $my_query->have_posts() ) : $my_query->the_post();?>
								<div class="col-xs-12 col-sm-6 col-md-3">
									<?php $thumbnailUrl = get_the_post_thumbnail_url($my_thumb, full); ?>
									<div class="hovereffect">
										<div class="folio-image">
											<img src="<?php echo $thumbnailUrl; ?>" alt="" class="img-responsive">
										</div>
										<div class="overlay">
											<h6><?php the_title(); ?></h6>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
							
						<?php endif; ?>

						
						
					</div>


				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>