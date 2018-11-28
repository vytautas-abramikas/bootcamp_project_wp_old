<!--PORTFOLIO START-->
			<section id="portfolio">
				<div class="portfolio_content">
					<div class="portfolio_header content_width">
						<h2 class="section_title"><?php the_field('portfolio_title'); ?></h2>
						<div class="dribble_link">
							<a href="<?php the_field('portfolio_link_url'); ?>" target="_blank">
								<?php the_field('portfolio_link_text'); ?><span> ></span>
							</a>
						</div>
					</div>
					<div class="portfolio_img_container">
						<?php 
						if(have_rows('portfolio_item_repeater')):
							while (have_rows('portfolio_item_repeater')):
							the_row();
							$port_item_pic = get_sub_field('port_item_pic');
							$port_item_url = get_sub_field('port_item_url');
						?>
							<a href="<?php echo $port_item_url; ?>" target="_blank">
								<img src="<?php echo $port_item_pic['sizes']['port_pic']; ?>" 
								alt="<?php echo $port_item_pic['alt']; ?>"/>
							</a>
						<?php	
							endwhile;
						endif;
						?>
					</div>
					<div class="portfolio_footer content_width">
						<a class="blue_button" href="<?php the_field('portfolio_link_url'); ?>" target="_blank">LOAD MORE</a>
					</div>
				</div>
			</section>
<!--PORTFOLIO END-->