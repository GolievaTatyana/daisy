<?php $templateUri = get_template_directory_uri();?>
<?php

$pagesForSections = get_pages(array('meta_key' => 'add_to',
                                    'hierarchical' => 0,
                                    'sort_column' => 'menu_order',
                                    'sort_order' => 'asc')
);

$banner    =[];
$banner_items = [];
$slogan       = [];
$receive     = [];
$business    = [];
$our_process  = [];
$landing_pg = [];
$advertising       = [];
$marketing     = [];
$portfolio    = [];
$all_members  = [];
$one_member  = [];
$contact  = [];
$counter      = 0;
foreach ($pagesForSections as $page) {
  switch ($page->meta_value) {
    case 'banner':
    $banner[] = $page;
    break;
    case 'banner_items':
    $banner_items[] = $page;
    break;
    case 'slogan':
    $slogan[] = $page;
    break;
    case 'receive':
    $receive[] = $page;
    break;
    case 'business':
    $business[] = $page;
    break;
    case 'our_process':
    $our_process[] = $page;
    break;
    case 'landing_pg':
    $landing_pg[] = $page;
    break;
    case 'advertising':
    $advertising[] = $page;
    break;
    case 'marketing':
    $marketing[] = $page;
    break;
    case 'portfolio':
    $portfolio[] = $page;
    break;
    case 'all_members':
    $all_members[] = $page;
    break;
    case 'one_member':
    $one_member[] = $page;
    break;
    case 'contact':
    $contact[] = $page;
    break;
  }
}
?>
<?php get_header(); ?>

<?php if ($banner): ?>
  <section id="banner">
    <?php if ($banner_items): ?>
      <div class="banner-items">
        <?php foreach ($banner_items as $key => $slide): ?>
          <?php echo $slide->post_excerpt; ?>
        <?php endforeach; ?>
      </div>

      <?php $slogan = $slogan[0]; ?>
      <?php if ($slogan): ?>
        <article id="slogan">
          <div class="container-fluid">
            <div class="row text-center">
              <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                <div class="slogan">
                  <h1><?php echo $slogan->post_title; ?></h1>
                  <?php echo $slogan->post_content; ?>
                </div>
              </div>
            </div>
          </div>
        </article>
      <?php endif; ?>
      <div class="red"><a href="#services"></a></div>
    <?php endif; ?>
  </section>
<?php endif; ?>

<?php get_footer(); ?>
