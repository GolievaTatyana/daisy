<?php get_header(); ?>
<div class="container-fluid page-wrapper">
	<div class="row content">
		<div class="col-xs-10 col-xs-offset-1">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
	<?php get_footer(); ?>
</div>
