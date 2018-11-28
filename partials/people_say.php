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
						<!-- 	<a href="<?php echo $port_item_url; ?>" target="_blank">
								<img src="<?php echo $port_item_pic['sizes']['port_pic']; ?>" 
								alt="<?php echo $port_item_pic['alt']; ?>"/>
							</a> -->

							<h3 class="quote section_subtitle"><?php echo $quote; ?></h3>
							<div class="person_quoted">
								<div class="person_name"><?php echo $author; ?></div>
								<div class="person_position"><?php echo $author_position; ?></div>
							</div>
						<?php	
							endwhile;
						endif;
						?>
						<!--
						<h3 class="quote section_subtitle">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
						</h3>
						<div class="person_quoted">
							<div class="person_name">JANE GALADRIEL</div>
							<div class="person_position">CEO TENGKUREP</div>
						</div>
						-->
					</div>
				</div>	
			</section>
<!--PEOPLE END-->