<?php
      // wordpress function, tells WP while there are posts, post them.
      while(have_posts()) {
 
        // tells WP to get all relevant info of the next posts to use
        the_post(); ?>
	  <h1> This is a page, not a post </h1>
            <!-- title for the post -->
        <h2><?php the_title(); ?></h2>
        <!-- content for the post -->
        <?php the_content(); ?>
      <?php }
 
?>
