<?php
/**
 * Template Name: About Our Tours
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
          <div class="col-xl-10">
           
            <header class="page-title overview overview-without-border">
              <h1><?php the_title();?></h1>
            </header>
            
            <div class="row">
              <div class="col-xl-12 intro">
                <?php the_field('introduction'); ?>
              </div>
            </div>
          </div>
        </div>
            
        <div class="row"> 
           <div class="card-deck-wrapper">
            <div class="card-deck mb-4">
            <?php if( have_rows('tour_types') ): ?>
              <?php while( have_rows('tour_types') ): the_row(); ?>
                
                  <div class="card text-xs-center">
                    <div class="card-body text-center">
                      <h2 class="card-title"><?php the_sub_field('tour_type_name'); ?></h2>
                      <img src="<?php the_sub_field('tour_type_image'); ?>" class="round-frame img-fluid mx-auto d-block" />
                      <p class="card-text"><?php the_sub_field('tour_type_description'); ?></p>
                    </div>
                    <div class="card-footer">
                      <a href="<?php the_sub_field('link_to_tour_type_landing_page'); ?>" class="red-btn tour-more-info">View <?php the_sub_field('tour_type_name'); ?> <i class="fa fa-chevron-right"></i></a>
                  </div>
                  </div>
                
              <?php endwhile; ?>
            <?php endif; ?>
            </div>
           </div>
        </div>
          
      </div><!-- /.span12 -->
      
      </div><!--/row--> 
      <?php get_footer(); ?> 
    </div><!-- /container -->
  </body>
</html>