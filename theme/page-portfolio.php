<?php /*Template Name: Portfolio*/ ?>

<?php get_header(); ?>

<div id="main-content" class="main-content">
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

      <?php 
      $args = array( 'hide_empty=0' );
      $terms = get_terms('portfolio_category', $args);


      if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
        $count = count($terms);
        $i=0;
        $term_list = '<p class="my_term-archive">';
        foreach ($terms as $term) {
          $i++;
          $term_list .= '<a href="' . get_term_link( $term ) . '" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a>';
          if ($count != $i) {
            $term_list .= ' &middot; ';
          }
          else {
            $term_list .= '</p>';
          }
        }
        echo $term_list;
      }
      ?>

      <?php

      foreach( $terms as $term ) {


        $args = array(
        'post_type' => 'portfolio',
        'portfolio_category' => $term->slug
        );
        $query = new WP_Query( $args );


        while ( $query->have_posts() ) : $query->the_post(); ?>

        <li class="animal-listing" id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <article class="entry-content">
          <?php $attr = array(
          'class' => "archive-image",
          'alt' => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
          ); ?>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', $attr ); ?></a>
        </article>

      <?php endwhile; wp_reset_postdata();

    } ?>

  </div>
</div>
</div>

<?php

get_footer();