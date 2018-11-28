<!--PEOPLE START-->
			<section id="people_say">
				<div class="overlay">
					<div class="psay_content content_width">
						<?php 
						if(have_rows('quote_repeater')):
							while (have_rows('quote_repeater')):
							the_row();
							$quote = get_sub_field('quote');
							$author = get_sub_field('author');
							$author_position = get_sub_field('author_position');
						?>
							<h3 class="quote section_subtitle"><?php echo $quote; ?></h3>
							<div class="person_quoted">
								<div class="person_name"><?php echo $author; ?></div>
								<div class="person_position"><?php echo $author_position; ?></div>
							</div>
						<?php	
							endwhile;
						endif;
						?>
					</div>
				</div>	
			</section>
<!--PEOPLE END-->