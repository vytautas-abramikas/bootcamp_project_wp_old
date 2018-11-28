<!--TEAM START-->
			<section id="team">
				<div class="overlay">
					<div class="team_content content_width">
						<h2 class="section_title"><?php the_field('team_title'); ?></h2>
						<h3 class="section_subtitle"><?php the_field('team_subtitle'); ?></h3>
						<div class="team_container">
							<?php 
							if(have_rows('team_mem_repeater')):
								while (have_rows('team_mem_repeater')):
								the_row();
								$team_mem_pic = get_sub_field('team_mem_pic');
								$team_mem_name = get_sub_field('team_mem_name');
								$team_mem_pos = get_sub_field('team_mem_pos');
								?>
									<div class="team_member">
										<div class="member_img_container">
											<img src="<?php echo $team_mem_pic['sizes']['t_mem_pic']; ?>" 
											alt="<?php echo $team_mem_pic['alt']; ?>"/>
										</div>
										<div class="person_name"><?php echo $team_mem_name; ?></div>
										<div class="person_position"><?php echo $team_mem_pos; ?></div>
									</div>
								<?php	
								endwhile;
							endif;
							?>		
						</div>
						<p class="page_text"><?php the_field('team_caption'); ?></p>
						<a class="blue_button" href="#contact">WE ARE HIRING</a>
					</div>	
				</div>
			</section>
<!--TEAM END