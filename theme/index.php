<?php
/*
Пособие по созданию архива для вывода записей по терминам таксономии
Шаблон архива для записей пользовательского типа animal 
*/
?>
 
<?php get_header(); ?>
 
    <div id="main-content" class="main-content">
 
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 
            <header class="archive-header">
                <h1 class="archive-title">
                    <?php post_type_archive_title(); ?>
                </h1>
            </header><!-- .archive-header -->
            
            <?php //начало выборки терминов для таксономии animal_cat
 $terms = get_terms( '', array(
    'orderby'    => 'count',
    'hide_empty' => 0
 ) );
 ?>

 <?php
// теперь выполняется запрос для каждого семейства животных
foreach( $terms as $term ) {
 
    // Определение запроса
    $args = array(
        'post_type' => 'portfolio',
        'portfolio_category' => $term->slug
    );
    $query = new WP_Query( $args );
             
    // вывод названий записей в тегах заголовков
     echo'<h2>' . $term->name . '</h2>';
     
    // вывод списком заголовков записей
    echo '<ul>';
     
        // Начало цикла
        while ( $query->have_posts() ) : $query->the_post(); ?>
 
        <li class="animal-listing" id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
         
        <?php endwhile;
     
    echo '</ul>';
     
    // используем сброс данных записи, чтобы восстановить оригинальный запрос
    wp_reset_postdata();
 
} ?>
                         
        </div><!-- #content -->
    </div><!-- #primary -->
</div><!-- #main-content -->
 
<?php

get_footer();