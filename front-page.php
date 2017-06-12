<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'template-parts/homepageshop'); ?>


				<?php get_template_part( 'template-parts/homepagejournal'); ?>


				<?php get_template_part( 'template-parts/homepageadventures'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php  get_footer(); ?>
