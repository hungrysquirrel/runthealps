<?php
/**
 * Template Name: Generic Tour Type Landing Page
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
          <?php if( have_rows('self_guided_tour_region_overview') ): ?>
            <?php while( have_rows('self_guided_tour_region_overview') ): the_row(); ?>
              <div class="col-xl-4 card-deck">
                <div class="card short-card mb-4">
                  <img src="<?php the_sub_field('region_thumbnail'); ?>" class="card-img-top img-fluid" />
                  <div class="card-body">
                    <h2 class="card-title">
                      <?php the_sub_field('region_name'); ?>
                    </h2>
                    <div class="card-text"><?php the_sub_field('region_description'); ?></div>
                  </div>
                  <div class="card-footer">
                    <a href="<?php the_sub_field('link_to_self_guided_tour'); ?>" class="red-btn tour-more-info">Find out more <i class="fa fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        
          
      </div><!-- /.span12 -->
      
    </div><!--/row--> 
    <?php get_footer(); ?> 
  </div><!-- /container -->

</body>
</html>