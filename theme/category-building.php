<?php /*Template Name: Portfolio-category*/ ?>
<?php $templateUri = get_template_directory_uri();?>

<?php get_header(); ?>
<section id="portfolio" class="portfolio-category">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="row text-center caption">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
              <h2><?php the_title(); ?></h2>
            </div>
          </div>
          <div class="row slider-container">
            <?php if (have_posts() ): ?>
              <?php $postCounter = 0; ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <?php if ($postCounter % 6 === 0):?>
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
                      <?php if ($postCounter % 3 === 2): ?>
                      </div>
                    <?php endif; ?>
                    <?php $postCounter++; ?>
                  <?php endwhile; ?>
                  <?php if ($postCounter % 3 !== 0): ?>
                  </div>
                <?php endif; ?>
              <?php endif; ?>
              <?php       
              ?>
            </div>
          <?php endwhile; ?>
          <div class="row text-center oder">
            <a href="#">I want landing page</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>