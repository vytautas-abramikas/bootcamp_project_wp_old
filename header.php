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
									<?php $logo_image = get_field('main_logo', 'option');?>
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
						<h1 id="hero_title"><?php the_field('hero_title', 'option'); ?></h1>
						<p class="page_text slide">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
						<p class="page_text slide">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. This is Photoshop's version  of Lorem Ipsum. </p>
						<p class="page_text slide">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
						<p class="page_text slide">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
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