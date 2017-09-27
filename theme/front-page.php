<?php $templateUri = get_template_directory_uri();?>
<?php
$currentPageId = get_the_ID();
$articles      = get_pages(array(
'parent'      => $currentPageId,
'sort_column' => 'menu_order')
);
$pagesForSections = get_pages(array(
'meta_key'     => 'add_to',
'hierarchical' => 0,
'sort_column'  => 'menu_order',
'sort_order'   => 'asc')
);

$receive = [];
$business = [];
$our_process    = [];
$we_do    = [];
$all_members  = [];
$one_member  = [];
$contact  = [];
$counter  = 0;
foreach ($pagesForSections as $page) {
	switch ($page->meta_value) {
		case 'receive':
		$receive[] = $page;
		break;
		case 'business':
		$business[] = $page;
		break;
		case 'our_process':
		$our_process[] = $page;
		break;
		case 'we_do':
		$we_do[] = $page;
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


<?php get_header();?>

<section id="services">
	<?php if ($receive):?>
		<article id="receive">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<?php foreach ($receive as $key_item => $item):?>
							<?php if ($key_item == 0):?>
								<div class="row text-center caption">
									<div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
										<h2><?php echo $item->post_excerpt; ?></h2>
										<p><?php echo $item->post_content; ?></p>
									</div>
								</div>
							<?php endif;?>
						<?php endforeach;?>
						<div class="row text-center">
							<?php foreach ($receive as $key_item => $item):?>
								<?php if ($key_item !== 0):?>
									<?php $style = get_post_meta($item->ID, 'style', true);?>
									<div class="col-sm-6 col-md-3">
										<div class="small-hex">
											<div class="hexagon <?php echo $style;?>">
												<div class="hexTop"></div>
												<div class="hexBottom"></div>
											</div>
										</div>
										<h4><?php echo $item->post_title; ?></h4>
										<p><?php echo $item->post_content; ?></p>
									</div>
								<?php endif;?>
							<?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center arrow">
				<div class="white click-element"><a href="#business"></a></div>
			</div>
		</article>

		<?php $BusinessPage = $business[0];?>
		<article id="business">
			<div class="container-fluid">
				<div class="row text-center">
					<div class="border">
						<h1><?php echo $BusinessPage->post_excerpt; ?></h1>
						<?php echo $BusinessPage->post_content; ?>
					</div>
				</div>
			</div>
			<div class="row text-center arrow">
				<div class="red click-element"><a href="#about"></a></div>
			</div>
			<div class="cover"></div>
		</article>
	<?php endif;?>
</section>

<section id="about">
	<?php if ($our_process):?>
		<article id="our-process">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<?php foreach ($our_process as $key_item => $item):?>
							<?php if ($key_item == 0):?>
								<div class="row text-center caption">
									<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
										<h2><?php echo $item->post_excerpt; ?></h2>
										<p><?php echo $item->post_content; ?></p>
									</div>
								</div>
							<?php endif;?>
						<?php endforeach;?>
						<div class="row text-center">
							<div class="col-md-10 col-md-offset-1">
								<div class="big-hexs hidden-xs">
									
									<?php foreach ($our_process as $key_item => $item):?>
										<?php if ($key_item !== 0):?>
											<?php $styleHW = get_post_meta($item->ID, 'styleHW', true);?>
											<?php $styleH = get_post_meta($item->ID, 'styleH', true);?>
											<?php $styleI = get_post_meta($item->ID, 'styleI', true);?>
											<div class="hex-wrapper <?php echo $styleHW;?>">
												<div class="hexagon <?php echo $styleH;?>">
													<div class="icon <?php echo $styleI;?>">
														<a href="#"></a>
													</div>

													<?php if ($key_item == 4):?>
														<?php $styleI2 = get_post_meta($item->ID, 'styleI2', true);?>
														<div class="icon <?php echo $styleI2;?>"><a href="#"></a></div>
													<?php endif; ?>

													<div class="hex-content">
														<h4><?php echo $item->post_excerpt; ?></h4>
														<p><?php echo $item->post_content; ?></p>
													</div>
												</div>
											</div>
											<?php if ($key_item == 5):?>
												<div class="hex-wrapper <?php echo $styleHW;?>">
													<div class="hexagon <?php echo $styleH;?>">
														<div class="icon <?php echo $styleI;?>">
															<a href="#"></a>
														</div>
														<div class="hexTop"></div>
														<div class="hexBottom"></div>
													</div>
												</div>
											<?php endif; ?>
										<?php endif;?>
									<?php endforeach;?>
									
									
								</div>
								<div class="rounds shov-xs hidden-sm hidden-md hidden-lg">
									<div class="row">
										<?php foreach ($our_process as $key_item => $item):?>
											<?php if ($key_item !== 0):?>
												<?php $styleR = get_post_meta($item->ID, 'styleR', true);?>
												<div class="col-xs-12">
													<div class="item">
														<div class="round <?php echo $styleR;?>"></div>
														<h4><?php echo $item->post_excerpt; ?></h4>
														<p><?php echo $item->post_content; ?></p>
													</div>
												</div>
											<?php endif;?>
											<?php if ($key_item == 4):?>
												<?php break; ?> 
											<?php endif;?>
										<?php endforeach;?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center arrow">
				<div class="white click-element"><a href="#we-do"></a></div>
			</div>
		</article>
	<?php endif;?>

	<article id="we-do">
		<?php foreach ($we_do as $key_item => $item):?>
			<?php $sectionID = get_post_meta($item->ID, 'sectionID', true);?>
			<?php $sectionL = get_post_meta($item->ID, 'sectionL', true);?>
			<?php $thumbnailUrl = get_the_post_thumbnail_url($item, full);?>
			<section id="<?php echo $sectionID; ?>">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="wrapper">
								<?php if ($key_item == 0):?>
									<div class="row text-center caption">
										<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
											<h2><?php echo $item->post_excerpt; ?></h2>
										</div>
									</div>
								<?php endif;?>
								<div class="row content">
								<?php
								    $classFirst = "col-md-6"; 
								    $classSecond = "col-md-6 text";
								    if ($key_item % 2) {
								    	$classFirst .= " col-md-push-6";
								    	$classSecond .= " col-md-pull-6";
								    }
								?>
									<div class="<?php echo $classFirst; ?>">
										<div class="devices">
											<img src="<?php echo $thumbnailUrl; ?>" alt="devices" class="img-responsive">
										</div>
									</div>
									<div class="<?php echo $classSecond; ?>">
										<h3><?php echo $item->post_title; ?></h3>
										<p><?php echo $item->post_content; ?></p>
										<a href="#">More details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center arrow">
					<div class="white click-element"><a href="#<?php echo $sectionL; ?>"></a></div>
				</div>
			</section>
		<?php endforeach;?>
	</article>
</article>
</section>

<?php get_footer();?>
