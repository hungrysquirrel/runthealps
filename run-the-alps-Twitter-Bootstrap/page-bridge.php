<?php
/**
 * Template Name: Bridge
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
                  <span class="generic-h1"><?php the_title();?></span>
                </header>
          
              </div>
            </div>
            
            <div class="row">
              <div class="col-xl-9">
                <div class="row">
                  <div class="col-xl-9 generic-text">
                    <?php while ( have_posts() ) : the_post(); ?>
                      <?php the_content();?>
                    <?php endwhile; // end of the loop. ?>
                  </div>
                </div>
                
                    
                <div class="row related-tours"> 
                   <div class="col-xl-12 generic-text">
                     <h2>See Tours in ALPS Region</h2>
                      <div class="faq">
                        <div class="row">
                       <!-- repeater	-->
          	    	        <?php              
                          if(get_field('related_tours')): ?>
                          <?php while(has_sub_field('related_tours')): ?>
                
                            
                              <div class="col-xl-3">
                                <img src="<?php the_sub_field('related_tour_image'); ?>" />
                                <?php $post_object = get_sub_field('tour_name'); ?>
                                <?php if( $post_object ): ?>
                                <?php $post = $post_object; setup_postdata( $post ); ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                              </div>
                            
                
                            <?php endwhile; ?>
                            <?php endif; ?>
                         <!-- /repeater	-->
                         </div>
                      </div><!--faq-->  
                   </div>
                </div>
                <div class="row">
                  <div class="col-xl-9">
                    <?php the_field('supportive_copy'); ?>
                  </div>
                </div>
              </div>
              <!--sidebar-->
              <div class="col-xl-3">
                <?php the_field('bridge_sidebar'); ?>
              </div>
            </div>
            
              
          </div><!-- /.span12 -->
          <?php get_footer(); ?>
      </div><!--/row-->  
    </div><!-- /container -->
  </body>
</html>