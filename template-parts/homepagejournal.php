<h1>
  INHABITENT JOURNAL
</h1>

<section class='journal-container'>

  <div class="journal-container container">
      <?php
        // Get the last 3 posts.
        global $post;
        $args = array( 'posts_per_page' => 3, 'orderBy' => 'date', 'order' => "ASC" );
        $myposts = get_posts( $args );

        foreach( $myposts as $post ) :	setup_postdata($post); ?>
          <div class="journal-entry">
            <?php the_post_thumbnail(); ?>
            <div class="journal-stuff-content">
              <p><?php the_date();?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
              <h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            </div> <!--journal-stuff-content-->
            <div class=btn-container>
            <a href="<?php the_permalink() ?>" class="">Read Entry</a>
            </div>
          </div>

      <?php endforeach;wp_reset_postdata(); ?>
  </div>

</section><!--Journal Container-->
