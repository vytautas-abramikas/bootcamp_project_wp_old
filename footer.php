<!--FOOTER START-->
			<footer id="footer">
				<div class="overlay">
					<div class="footer_content content_width">
						<div class="footer_top">
							<div class="studio_about">
								<div class="logo_container">
									<?php $logo_image = get_field('main_logo');?>
									<img src="<?php echo $logo_image['sizes']['logo']; ?>" alt="logo"/>
								</div>
								<p class="page_text">
									<?php the_field('text_under_logo'); ?>
								</p>
							</div>
							<div class="studio_subt_addr_phone">
								<div class="footer_subtitle"><?php the_field('company_subtitle'); ?></div>
								<div class="studio_address">
									<div>
										<?php
											$loc_pic = get_field('loc_pic');
											$loc_url = get_field('loc_url');
										?>
										<a href="<?php echo $loc_url; ?>" target="_blank">
											<img src="<?php echo $loc_pic['sizes']['footer_icon']; ?>" 
												alt="<?php echo $loc_pic['alt']; ?>"/>
										</a>
									</div>
									<div class="page_text">
										<?php the_field('loc_text'); ?>
									</div>
								</div>
								<div class="studio_phone">
									<div>
										<?php
											$phone_pic = get_field('phone_pic');
											$phone_link = get_field('phone_link');
										?>
										<a href="<?php echo $phone_link; ?>">
											<img src="<?php echo $phone_pic['sizes']['footer_icon']; ?>" 
												alt="<?php echo $phone_pic['alt']; ?>"/>
										</a>
									</div>
									<div class="page_text"><?php the_field('phone_num'); ?></div>
								</div>
							</div>
							<div class="studio_social">
								<div class="footer_subtitle"><?php the_field('social_block_subtitle'); ?></div>
								<div class="subscribe_container">
									<?php
									echo do_shortcode(get_field('newsletter_form_shortcode'));
									?>
								</div>
								<div class="social_container">
									<?php 
									if(have_rows('social_networks_repeater')):
										while (have_rows('social_networks_repeater')):
											the_row();
											$soc_net_pic = get_sub_field('soc_net_pic');
											$soc_net_url = get_sub_field('soc_net_url');
									?>
									<a class="social_network" href="<?php echo $soc_net_url; ?>" 
										target="_blank">
										<img src="<?php echo $soc_net_pic['sizes']['footer_icon']; ?>" 
											alt="<?php echo $soc_net_pic['alt']; ?>"/>
									</a>
									<?php	
										endwhile;
									endif;
									?>
								</div>
							</div>
						</div>
						<div class="footer_bottom">
							<div class="bottom_left">
								<nav class="bottom_menu_container">

								<?php 
								$footer_menu_args = [
									'menu_class' => 'bottom_menu',
									'container' => 'false',
									'theme_location' => 'footer-navigation'
								];

								wp_nav_menu($footer_menu_args);
								?>

								</nav>
							</div>
							<div class="bottom_right"><?php the_field('copyright_notice'); ?></div>
						</div>
					</div>	
				</div>
			</footer>
<!--FOOTER END-->
		</div>	
	<?php wp_footer(); ?>
	</body>
<!--PAGE END-->
</html>