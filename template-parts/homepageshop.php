<section class="shop-stuff">
      <h1 class='textcentered'>Shop Stuff</h1>

    <div class="stuff-container">
    <?php
      $args = array('taxonomy' => 'type', 'hide_empty' => true,'order' =>'ASC', 'orderby' =>'name');
      $myterms = get_terms( $args );

      foreach( $myterms as $term ) : ?>
        <div class="shop-stuff-box">
          <img class="shop-stuff-icon" src="<?php print_r(wp_upload_dir()["url"]); echo "/"; echo $term->slug.".svg"?>" alt="shop icon"/>
          <?php echo term_description( $term) ?>
          <a href="<?php echo get_category_link( $term )?>" class="shopbtn"><?php echo strtoupper($term ->slug);?> STUFF</a>
        </div>
    <?php endforeach; ?>


    </div>

</section>
