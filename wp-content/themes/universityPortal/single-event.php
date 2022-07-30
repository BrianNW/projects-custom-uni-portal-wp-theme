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
                  <p>Single-event page</p>
                </div>
              </div>
            </div>

            <div class="container container--narrow page-section">
                  <div class="metabox metabox--position-up metabox--with-home-link">        
              <p>
                <!-- breadcrumb box -->
                <a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>">
                <i class="fa fa-home" aria-hidden="true"></i> Events Home </a> 
                <span class="metabox__main"><?php the_title(); ?> on <?php the_time('n.j.y'); ?> in <?php get_the_category_list(', '); ?></span>
              </p>
            </div>

              <div class="generic-content"><?php the_content(); ?></div>
          </div>

      <?php }
 
 get_footer();

?>
