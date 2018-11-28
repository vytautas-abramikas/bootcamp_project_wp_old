<!DOCTYPE html>

<html <?php language_attributes(); ?>> 
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(); ?></title>
		
		<?php wp_head(); ?>

	</head>
	<body>
<!--PAGE START-->
		<div class="page_all">
<!--HERO START-->
			<header id="hero_all">
				<div class="overlay">
					<div class="hero content_width">
						<div id="menu" class="menu_center">
							<nav class="main_menu_all content_width">
								<div class="logo_container">
									<?php $logo_image = get_field('main_logo');?>
									<img src="<?php echo $logo_image['sizes']['logo']; ?>" alt="logo"/>
								</div>

								<?php 
								$main_menu_args = [
									'menu_class' => 'main_menu',
									'container' => 'false',
									'theme_location' => 'primary-navigation'
								];

								wp_nav_menu($main_menu_args);
								?>

							</nav>
						</div>
						<h1 id="hero_title"><?php the_field('hero_title'); ?></h1>
						<p class="page_text slide"><?php the_field('hero_text_1'); ?></p>
						<p class="page_text slide"><?php the_field('hero_text_2'); ?></p>
						<p class="page_text slide"><?php the_field('hero_text_3'); ?></p>
						<p class="page_text slide"><?php the_field('hero_text_4'); ?></p>
						<button class="blue_button" onclick="plusDivs(1)">LEARN MORE</button>
						<div class="dots">
    						<div class="dot" onclick="currentDiv(1)"></div>
    						<div class="dot" onclick="currentDiv(2)"></div>
    						<div class="dot" onclick="currentDiv(3)"></div>
    						<div class="dot" onclick="currentDiv(4)"></div>
  						</div>
					</div>
				</div>
			</header>
<!--HERO END-->