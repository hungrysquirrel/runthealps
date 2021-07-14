<?php
/**
 * Template Name: Custom Tours
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
                <?php the_field('introduction'); ?>
              </div>
            </div>
          </div>
        </div>
            
        <div class="row"> 
           <div class="mb-4">
            <div class="card-deck">
            <?php if( have_rows('process_part') ): ?>
              <?php while( have_rows('process_part') ): the_row(); ?>
                <div class="card text-xs-center text-white custom-tour-background-image" style="background-image: url('<?php the_sub_field("background_image"); ?>')">
                  <div class="card-body">
                    <div class="round-icon-frame transparent-frame"><i class="fa <?php the_sub_field('icon'); ?>"></i></div>
                    <h2 class="card-title"><?php the_sub_field('process_step'); ?></h2>
                    <blockquote  class="card-blockquote"><?php the_sub_field('process_step_description'); ?></blockquote>
                    <a href="/contact" class="red-btn tour-more-info">Contact us <i class="fa fa-chevron-right"></i></a>
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