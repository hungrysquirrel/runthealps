<?php
/**
 * Template Name: Join Us
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
<!-- Begin Template Content -->
  <div class="container sbs-content-wrapper">
    <div class="row"> 
      <div class="col-xl-12 blog-post-top-rule">
      
        <div class="row">
          <div class="col-xl-12">
           
            <header class="page-title overview overview-without-border">
              <h1><?php the_title();?></h1>
            </header>
            
            <div class="row">
              <div class="col-xl-12 intro">
                <?php the_field('join_us_intro'); ?>
              </div>
            </div>
          </div>
        </div>
            
        <div class="row"> 
           
            
                <?php
                 	  $pages = get_pages('child_of='.$post->ID.'&sort_column=menu_order');
                 	  $count = 0;
                 	  foreach($pages as $page)
                 	  {
                 	  	$content = $page->post_content;
                 	  	$tour_hero_photo = get_field('tour_hero_photo', $page->ID);
                 	  	$tour_date = get_field('date', $page->ID);
                 	  	$tour_length = get_field('length', $page->ID);
                 	  	$tour_category = get_field('category', $page->ID);
                 	  	$tour_summary = get_field('summary', $page->ID);
                    
                 	  ?>
                 	  <div class="col-xl-12 tour-entry compact">
                      <div class="row">
                 	      <div class="col-xl-8">
                   	      <div class="row">
                            <div class="col-xl-12">
                              <div class="tour-hero-image">
                 	      	      <h1><a href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></a></h1>
                 	      	      <img src="<?php echo $tour_hero_photo ?>" />
                 	      	    </div>
                            </div>
                          </div>
                        </div><!--trips-->
                        <div class="col-xl-4">
                          
                          <div class="row">
                            <div class="col-xl-12 tour-info compact">
                              <div class="row">
                                <div class="col-xl-4">
                                  <h6>Date</h6>
                                  <p><?php echo $tour_date ?></p>
                                </div>
                                <div class="col-xl-4">
                                  <h6>Length</h6>
                                  <p><?php echo $tour_length ?></p>
                                </div>
                                <div class="col-xl-4">
                                  <h6>Tour Category</h6>
                                  <p><?php echo $tour_category ?></p>
                                </div>
                                <div class="col-xl-4">
                                  <h6>Summary</h6>
                                  <?php echo $tour_summary ?>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-12">
                              <a href="<?php echo get_page_link($page->ID) ?>" class="red-btn inverse tour-more-info">More details <i class="fa fa-chevron-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                 	  <?php
                 	  }
                ?>
              
           
           
        </div>
          
      </div><!-- /.span12 -->
      <?php get_footer(); ?>
      </div><!--/row-->  
    </div><!-- /container -->
  </body>
</html>