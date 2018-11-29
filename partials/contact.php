<!--CONTACT START-->
			<section id="contact">
				<div class="contact_content content_width">
					<div class="contact_form_container">
						<h2 class="section_title"><?php echo the_field('contact_form_subtitle'); ?></h2>
						<div class="contact_form">
							<?php 
							echo do_shortcode(get_field('contact_form_shortcode'));
							?>
						</div>
					</div>
					<div class="clients_container_all">
						<h2 class="section_title"><?php echo the_field('clients_subtitle'); ?></h2>
						<div class="clients_container">
							<?php 
							if(have_rows('clients_repeater')):
								while (have_rows('clients_repeater')):
								the_row();
								$client_logo = get_sub_field('client_logo');
							?>
								<div class="cl_logo_cont">
									<img src="<?php echo $client_logo['sizes']['client_pic']; ?>" 
										alt="<?php echo $client_logo['alt']; ?>"/>
								</div>
							<?php	
								endwhile;
							endif;
							?>
						</div>
					</div>
				</div>
			</section>
<!--CONTACT END-->