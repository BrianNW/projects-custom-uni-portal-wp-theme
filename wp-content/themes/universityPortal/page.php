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

    <?php
      // variable that stores parent posts's ID fetch
      $theParentPID = wp_get_post_parent_id(get_the_ID());
      //if is a child page, get the parent's post ID
      if($theParentPID) { ?>

        <!-- Display the breadcrumb box -->
        <div class="metabox metabox--position-up metabox--with-home-link">        
        <p>
          <!-- breadcrumb box -->
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParentPID);  ?>">
          <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParentPID); ?></a> 
          <span class="metabox__main"><?php the_title(); ?></span>
        </p>
      </div>
     <?php }     
    ?>

     

      <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <!-- <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li> -->
          <?php
           if($theParent) {
            $findChildrenOf = $theParent;
              } else {
                $findChildrenOf = get_the_ID();
              }
          
          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf
          )); 
          ?>
        </ul>
      </div>

      <div class="generic-content">
        <?php the_content(); ?>
      </div>
    </div>
	  
      <?php }
 
 get_footer();

?>
