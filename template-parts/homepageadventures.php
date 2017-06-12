<section class="adventure-containers">
				<h2 class=textcentered>Latest Adventures</h2>

				<div class="adventures-container ">

					<div class="half-section">
					<?php
						global $post;
						$args = array('post_type' => 'adventures', 'posts_per_page' => 1,'order' =>'ASC');
						$myposts = get_posts( $args );

					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<?php
						    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1200,800 ), false, '' );
						?>
						<div class="adventure-large" style="background-image:url(<?php echo $src[0]; ?>)">
								<div class="adventure-info">

									<h3><?php the_title(); ?></h3>
									<a href="<?php the_permalink() ?>" class="adventure-detail-button">Read More</a>
								</div>
						</div>
						<?php endforeach;wp_reset_postdata(); ?>

					</div>


					<div class="half-section">
						<?php
						global $post;
						$args = array('post_type' => 'adventures', 'posts_per_page' => 3,'order' =>'ASC','offset' => 1);
						$myposts = get_posts( $args );

						foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<?php
						    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1200,800 ), false, '' );
						?>
						<div class="small-adventures" style="background-image:url(<?php echo $src[0]; ?>)">
								<div class="adventure-info">
									<h3><?php the_title(); ?></h3>
									<a href="<?php the_permalink() ?>" class="adventure-detail-button btn">Read More</a>
								</div>
						</div>
						<?php endforeach;wp_reset_postdata(); ?>

					</div>
				</div><!--Adventures-container-->

				<div class="button-container">
					<a href="<?php echo get_post_type_archive_link('adventure'); ?>" class="btn adventure-btn">More Adventures</a>
				</div>
</section>
