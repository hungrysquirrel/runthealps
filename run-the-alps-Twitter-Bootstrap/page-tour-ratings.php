<?php
/**
 * Template Name: Tour Ratings
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
      <div class="col-xl-12">
      
        <div class="row">
          <div class="col-xl-8 blog-post-top-rule">
            <header class="page-title overview overview-without-border">
              <h1><?php the_title();?></h1>
              <p style="font-size: 16px;">A guide to finding the trip that's right for you.</p>
            </header>
          </div>
        </div>
        
            
            <div class="mx-3">
              <?php if( have_rows('trip_level') ): ?>
              <?php while ( have_rows('trip_level') ) : the_row(); ?>
                <div class="level-row row my-2 mb-4">
                  
                  <div class="col-xl-1 py-3 text-center level-icons <?php the_sub_field('level_icon'); ?>">
                    <i class="fas <?php the_sub_field('level_icon'); ?>"/></i>
                  </div>
                  
                  <div class="col-xl-8">
                    <div class="py-3">
                      <p class="my-0"><strong>The trip</strong></p>
                      <?php the_sub_field('the_trip'); ?>
                    
                      <p class="my-0"><strong>Is it for you?</strong></p>
                      <?php the_sub_field('is_it_for_you'); ?>
                    </div>
                  </div>
                  
                  <div class="col-xl-3">
                    <div class="py-3">
                      <p class="my-0"><strong>The guided trip for you</strong></p>
                      <?php if( have_rows('guided_trip_recommendations') ): ?>
                      <ul>
                      <?php while( have_rows('guided_trip_recommendations') ): the_row(); ?>
                        <?php $post_object = get_sub_field('link'); ?>
                        <?php if( $post_object ): ?>
                          <?php $post = $post_object; setup_postdata( $post ); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                          <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                      <?php endwhile; ?>
                      </ul>
                      <?php endif; ?>
                      
                      <p class="my-0"><strong>The self-guided regions for you</strong></p>
                      <?php if( have_rows('self_guided_trip_recommendations') ): ?>
                      <ul>
                      <?php while( have_rows('self_guided_trip_recommendations') ): the_row(); ?>
                        <?php $post_object = get_sub_field('link'); ?>
                        <?php if( $post_object ): ?>
                          <?php $post = $post_object; setup_postdata( $post ); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                          <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                      <?php endwhile; ?>
                      </ul>
                      <?php endif; ?>
                    </div>
                  </div>
                  
                </div><!--/card-->
              <?php endwhile; ?>
            <?php endif; ?>
            <p><i><small>Please note: Distances and vertical are estimations, shared with the goal of assisting in picking the best trip for you. Don?t hesitate to <a href="/contact">contact us</a> if you have questions!</small></i></p>
          </div>
            


      </div>
    </div><!-- /.span12 -->
    <?php get_footer(); ?>
  </div><!--/row-->  

</body>
</html>