<?php
/**
 * Template Name: About
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
    
      
      <div class="banner-image about">
        <img src="<?php the_field('about_top_image_banner'); ?>" />
        <div class="photographer-credit">
          <small>&copy;<?php the_field('about_image_photo_credit'); ?></small>
        </div>
      </div> 
          
      <div class="container sbs-content-wrapper">
        <div class="row">
            
           <div class="col-xl-12 about-story">
             <div class="row">
               <div class="col-xl-8 about-body-copy">
               
                 <header class="page-title overview no-underline">
                   <h1><?php the_title();?></h1>
                 </header>
                 <?php while ( have_posts() ) : the_post(); ?>
                   <?php the_content();?>
                 <?php endwhile; // end of the loop. ?>
               </div>
               
               <div class="col-xl-4">
                 <div class="sidebar-nav no-border no-left-padding">
                   <?php get_template_part('/includes/newsletter_signup_rev'); ?>
                    <p>
                      <div class="fb-page" data-href="https://www.facebook.com/runalps" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/runalps"><a href="https://www.facebook.com/runalps">Run The Alps</a></blockquote></div></div>
                    </p>
                    
                 </div>
               </div>
               
             </div>
           </div>
           
        </div><!--/row--> 
        <?php get_footer(); ?> 
      </div><!-- /container -->
    </body>
  </html>