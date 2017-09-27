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
             
                         
        </div><!-- #content -->
    </div><!-- #primary -->
    <?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->
 
<?php get_footer();