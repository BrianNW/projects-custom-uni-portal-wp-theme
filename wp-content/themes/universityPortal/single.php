<?php
get_header();
      // wordpress function, tells WP while there are posts, post them.
      while(have_posts()) {
 
        // tells WP to get all relevant info of the next posts to use
        the_post(); ?>
           <div class="page-banner">
              <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
              <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php the_title() ?></h1>
                <div class="page-banner__intro">
                  <p>Don't forget to replace me later!!</p>
                </div>
              </div>
            </div>

            <div class="container container--narrow page-section">
              Metabox will go here

              <div class="generic-content"><?php the_content(); ?></div>
          </div>

      <?php }
 
 get_footer();

?>
