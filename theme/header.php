<?php $templateUri = get_template_directory_uri();?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo $templateUri?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo $templateUri?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $templateUri?>/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo $templateUri?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo $templateUri?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo $templateUri?>/style.css">
	<link rel="shortcut icon" href="<?php echo $templateUri?>/logo.ico">
	<title>Daisy</title>
	<?php wp_head();?>
</head>
<body>

	<section id="banner">
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
									<img class="img-responsive" src="<?php echo $templateUri?>/img/logo.png" alt="logo">
									<span>Daisy</span>
								</a>
							</div>

							<?php
							$args = array(
							'theme_location'  => 'top-menu',
							'menu'            => 'top-menu',
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse top-menu',
							'container_id'    => 'bs-example-navbar-collapse-1',
							'menu_class'      => 'nav navbar-nav',
							);

							wp_nav_menu($args);
							;?>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<div class="banner-items">
			<div class="slide"></div>
			<div class="slide"></div>
			<div class="slide"></div>
			<div class="slide"></div>
		</div>
		<article id="slogan">
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
						<div class="slogan">
							<h1><span>Clients</span> in your business</h1>
							<p>Your clients on the internet. Learn how to receive them.</p>
							<a href="#">I want clients</a>
						</div>
					</div>
				</div>
			</div>
		</article>
		<div class="red"><a href="#services"></a></div>
	</section>
