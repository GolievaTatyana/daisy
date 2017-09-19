<?php $templateUri = get_template_directory_uri();?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $templateUri ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo $templateUri ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $templateUri ?>/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php echo $templateUri ?>/css/slick.css">
  <link rel="stylesheet" href="<?php echo $templateUri ?>/css/slick-theme.css">
  <link rel="stylesheet" href="<?php echo $templateUri ?>/css/style.css">
  <title>Daisy</title>
  <?php wp_head(); ?>
</head>
<body>


  <header id="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <nav class="navbar" role="navigation">
            <div class="navbar-header">
              <div class="hexagon">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <a class="navbar-brand" href="#">
                <img class="img-responsive" src="img/logo.png" alt="logo">
                <span>Daisy</span>
              </a>
            </div>

            <div class="collapse navbar-collapse top-menu" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a class="active" href="#services">services</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#contact">contact</a></li>
              </ul>
            </div>

            <?php $args = array(
	            'menu'            => 'Primary Menu',
	            'container'       => 'div',
	            'container_class' => 'collapse navbar-collapse top-menu',
	            'container_id'    => 'bs-example-navbar-collapse-1',
	            'menu_class'      => 'nav navbar-nav',
              'echo'            => true,
	            'theme_location'  => 'primary'
            ); ?>
          </nav>
        </div>
      </div>
    </div>
  </header>
