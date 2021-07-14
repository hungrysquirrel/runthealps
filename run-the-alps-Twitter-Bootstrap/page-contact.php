<?php
/**
 * Template Name: Contact
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
    <div class="container sbs-content-wrapper">
      <div class="row"> 
        <div class="col-xl-12 blog-post-top-rule">
          <div class="row"> 
                
                
            <div class="col-xl-8 contact-page">
              <header class="page-title overview overview-without-border">
                <h1><?php the_title();?></h1>
              </header>
              <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
              <?php endwhile; // end of the loop. ?>
            </div>
          </div>
        </div>
        
        
        
        
      </div>
      <?php get_footer(); ?>
    </div>
  </body>
</html>