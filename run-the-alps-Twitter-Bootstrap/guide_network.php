<?php
/**
 * Template Name: Guide Network Single Entry
 * Template Post Type: guide_network
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
    <div class="container sbs-content-wrapper mt-4">
      <div class="row"> 
        <div class="col-xl-12">
          <div class="row">
          
            
          <div class="row"> 
           <div class="col-xl-8">
               <div class="founders-about">
               
                   <div class="row founder-bio">
                   <div class="col-xl-3">
                     <img class="founder-photo" src="<?php the_field('guide_photo'); ?>"/>
                   </div>
                   <div class="col-xl-9">
                      
                      <header class="page-title">
                      	<p class="mb-0">Guide network</p>
                        <h1><?php the_title();?></h1>
                      </header>
                      
                      
                      <div class="bio-profile">
                        <p><strong class="section-title">Hometown</strong><?php the_field('guide_hometown'); ?></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">Years guiding</strong><?php the_field('years_guiding'); ?></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">Certifications</strong><?php the_field('certification'); ?></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">Guide bio</strong><?php the_field('guide_bio'); ?></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">Trail running background</strong><?php the_field('guide_trail_running_background'); ?></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">Why I like guiding</strong><?php the_field('guiding_why_they_like'); ?></p>
                      </div>
                      
                      <div class="bio-profile">
                        <p>
                          <strong class="section-title">Website</strong>
                          <a href="<?php the_field('guide_website'); ?>">Visit site</a>
                        </p>
                      </div>
                      
                      <?php
                        $regions = get_field( 'guide_regions_of_availability' );
                       
                        // Create a comma-separated list from selected values.
                        if( $regions ): ?>
                          <div class="bio-profile">
                            <strong class="section-title">Regions</strong>
                            <p><?php echo implode( ', ', $regions ); ?></p>
                          </div>
                        <?php endif; ?>

                      
                      <div class="bio-profile">
                        <p><strong class="section-title">Fees</strong><?php the_field('independent_guide_fee'); ?>/day</p>
                      </div>
                      
                      <div class="bio-profile">
                        <p><strong class="section-title">Gallery</strong></p>
                        <?php 
                        $images = get_field('guide_image_gallery');
                        if( $images ): ?>
                            <ul class="list-unstyled m-0 p-0" style="list-style-type: none;">
                                <?php foreach( $images as $image ): ?>
                                    <li>
                                        <a href="<?php echo esc_url($image['url']); ?>">
                                             <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </a>
                                        <p><?php echo esc_html($image['caption']); ?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                      </div>
                      
<!--
                      <div class="bio-profile">
                        <p><a href="/guides">See all Run the Alps guides</a></p>
                      </div>
-->
                   </div>
                   </div>

             </div><!--founderbios-->  
           </div>
           <div class="col-xl-4">
            <?php get_template_part('/includes/newsletter_signup_rev'); ?>
	         </div>
          </div>
          
          </div><!--/row-->  
        </div><!-- /.span12 -->
        <div class="col-xl-12">
          <?php get_footer(); ?>
        </div>
      </div><!--/row-->  
    </div><!-- /container -->
  </body>
</html>