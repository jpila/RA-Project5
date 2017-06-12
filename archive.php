<?php
/**
 * The categories and tags page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>

				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>


			<div class="journal-home-wrapper container">

				<div class="journal-box">
					<div class="title-category">
							<?php
								if (is_category()) {
									$yourcat = get_category ($cat);
									echo '<h2 class="title-cat"><span>Category:</span> '.$yourcat->slug.'</h2>';
								}
							?>

							<?php
								if ( is_tag() ) {
										$term_id = get_query_var('tag_id');
										$taxonomy = 'post_tag';
										$args ='include=' . $term_id;
										$terms = get_terms( $taxonomy, $args );
									echo '<h2 class="title-cat"><span>Tag:</span> ' . $terms[0]->slug . '</h2>';
								}
							?>
						</div>
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content'); ?>

					<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
					</div>
					<div class="widget-sidebar">
						<?php get_sidebar(); ?>
					</div>

			</div><!--.journal-home-wrapper  -->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
