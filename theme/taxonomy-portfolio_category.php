<div id="primary" class="content-media">
    <main id="main" class="site-main" role="main">
        <h1><?php single_term_title(); ?></h1>
        <?php
        $args = array( 'post_type' => 'portfolio' );
        $query = new WP_Query( $args );
        while( $query->have_posts() ) {
            $query->the_post();
            get_template_part( 'portfolio_category' );
        } wp_reset_postdata();
        ?>
    </main>
</div>



/*
Template Name: Главная страница
*/
?>
<?php $mts_options = get_option(MTS_THEME_NAME); ?>
<?php get_header(); ?>
<div id="page" class="single">
    <?php 
    $arg_cat = array(
    'orderby'      => 'name',
    'order'        => 'ASC',
    'hide_empty'   => 1,
    'exclude'      => '',
    'include'      => '',
    'taxonomy'     => 'category',
    );
    $categories = get_categories( $arg_cat );
    ?>
    <article class="<?php mts_article_class(); ?>">
        <div id="content_box" >
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('g post'); ?>>
                    <div class="single_page">
                        <div class="post-content box mark-links entry-content">
                            <?php the_content(); ?>
                            
                        </div><!--.post-content box mark-links-->
                    </div>
                </div>
            <?php endwhile; ?>
            <?php 
            if( $categories ){
                foreach( $categories as $cat ){
                    
                    $arg_posts =  array(
                'orderby'      => 'name', // сортировка по имени
                'order'        => 'ASC', // от меньшего к большему
                'posts_per_page' => 3, // по три поста
                'post_type' => 'post', // тип записи "посты"
                'post_status' => 'publish', // опубликованные посты
                'cat' => $cat->cat_ID, // получаем id рубрик
                );
                    $query = new WP_Query($arg_posts);
                    ?>
                    <?php       
                }
            }
            ?>
        </div>
    </article>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>


    <div class="row">
        <div class="single-item">
            <?php 
            if( $categories ){
                foreach( $categories as $cat ){

                    $arg_posts =  array(
                    'orderby'      => 'name',
                    'order'        => 'ASC',
                    'posts_per_page' => 3,
                    'post_type' => 'portfolio',
                    'cat' => $cat->cat_ID,
                    );
                    $query = new WP_Query($arg_posts);

                    ?>
                    <?php if ($query->have_posts() ) ?>
                    <p><?php echo $cat->name; ?> </p>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="main-page-post">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'widgetfull' );?>
                            </a>
                        </div>

                    <?php endwhile; wp_reset_postdata()?>
                    <?php       
                }
            }
            ?>
        </div>
    </div>