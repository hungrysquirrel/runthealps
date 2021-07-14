<?php
/**
 * Template Name: Detailed Tour Type Landing Page
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
              <div class="col-xl-10 intro">
                <?php the_field('tour_type_intro'); ?>
              </div>
            </div>
          </div>
        </div>
            
        <div class="row"> 
                <?php
                 	  $pages = get_pages('child_of=2218&sort_column=menu_order');
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
                 	  <div class="col-xl-4 card-deck">
                      <div class="card short-card mb-4">
                        <img src="<?php echo $tour_hero_photo ?>" class="card-img-top img-fluid" />
                        <div class="card-body">
                 	          <h2 div class="card-title"><a href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></a></h2>
                            <p class="card-text"><?php echo $tour_summary ?></p>
                        </div>
                        <div class="card-footer">
                          <a href="<?php echo get_page_link($page->ID) ?>" class="red-btn tour-more-info">Find out more <i class="fa fa-chevron-right"></i></a>
                        </div>
                      </div>
                 	  </div>
                 	  <?php
                 	  }
                ?>           
        </div>
          
      </div><!-- /.span12 -->
      
      </div><!--/row-->  
      <?php get_footer(); ?>
    </div><!-- /container -->
  </body>
</html>