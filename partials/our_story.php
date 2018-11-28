<!--OUR STORY START-->	
			<section id="our_story">
				<div class="our_story_content content_width">
					<div class="big_logo_container">
						<?php $big_logo_image = get_field('big_logo');?>
						<img src="<?php echo $big_logo_image['sizes']['big_logo']; ?>" alt="logo big"/>
					</div>
					<div class="our_story_right">
						<h2 class="section_title"><?php the_field('our_story_title'); ?></h2>
						<?php 
						if(have_rows('our_story_repeater')):
							while (have_rows('our_story_repeater')):
								the_row();
								?>
								<p class="our_story_p"><?php the_sub_field('paragraph'); ?></p>
								<?php	
							endwhile;
						endif;
						?>
						<a class="blue_button" href="#watch">LEARN MORE</a>
					</div>
				</div>
			</section>
<!--OUR STORY END-->