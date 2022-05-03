<?php 
get_header();

?>


<?php
      // wordpress function, tells WP while there are posts, post them.
      while(have_posts()) {
 
        // tells WP to get all relevant info of the next posts to use
        the_post(); ?>
            <!-- title for the post -->
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <!-- content for the post -->
        <?php the_content(); ?>
        <hr>
      <?php }
 
?>






<?php 
get_footer();

?>