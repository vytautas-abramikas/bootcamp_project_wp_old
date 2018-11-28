<!--WATCH START-->
			<section id="watch">
				<div class="overlay">
					<div class="watch_content content_width">
						<?php $play_image = get_field('play_picture'); 
						$link = get_field('watch_link');
						?>
						<a class="watch_circle" href="<?php echo $link; ?>" target="_blank">
							<img src="<?php echo $play_image['sizes']['play']; ?>" alt="play"/>
						</a>
						<a class="watch_story" href="<?php echo $link; ?>" target="_blank">
							<?php the_field('watch_caption'); ?>
						</a>
					</div>
				</div>
			</section>
<!--WATCH END-->