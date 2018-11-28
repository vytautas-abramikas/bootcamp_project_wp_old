<!--EXPERTISE START-->
			<section id="expertise">
				<div class="expertise_content content_width">
					<h2 class="section_title"><?php the_field('expertise_title'); ?></h2>
					<h3 class="section_subtitle"><?php the_field('expertise_subtitle'); ?></h3>
					<div class="exp_items_container">
						<?php 
						if(have_rows('exp_item_repeater')):
							while (have_rows('exp_item_repeater')):
								the_row();
								$exp_item_image = get_sub_field('exp_item_pic');
								$exp_item_capt = get_sub_field('exp_item_caption');
								$exp_item_text = get_sub_field('exp_item_txt');
								?>
									<div class="expertise_item">
										<div class="exp_img_container">
											<img src="<?php echo $exp_item_image['sizes']['exp_pic']; ?>" 
											alt="<?php echo $exp_item_image['alt']; ?>"/>
										</div>
										<h4 class="exp_item_caption"><?php echo $exp_item_capt; ?></h4>	
										<div class="exp_item_text"><?php echo $exp_item_text; ?></div>
									</div>	
								<?php	
							endwhile;
						endif;
						?>		
					</div>
				</div>
			</section>
<!--EXPERTISE END