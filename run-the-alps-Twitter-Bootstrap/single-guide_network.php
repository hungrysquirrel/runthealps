<?php
/**
 * Template Name: Guide Network Single Entry
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: Nov 1, 2020
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
                    	<p class="mb-0"><a href="/run-the-alps-trail-running-guide-network">Back to all guides &amp; regions</a></p>
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
                      <p><strong class="section-title">A bit about me</strong><?php the_field('guide_bio'); ?></p>
                    </div>
                    
                    <div class="bio-profile">
                      <p>
                        <strong class="section-title">Trail running background</strong>
                        <?php the_field('guide_trail_running_background'); ?>
                      </p>
                    </div>
                    
                    <div class="bio-profile">
                      <p><strong class="section-title">Why I love guiding</strong><?php the_field('guiding_why_they_like'); ?></p>
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
                          <strong class="section-title">
                            Region coverage
                            <button type="button" class="btn btn-sm btn-link" data-toggle="modal" data-target="#exampleModal">
                              <i class="far fa-map"></i> Map
                            </button>
                          </strong>
                          <p><?php echo implode( ', ', $regions ); ?></p>
                        </div>
                      <?php endif; ?>
                    
                    <div class="bio-profile">
                      <p><strong class="section-title">Fees</strong>
                        $<?php the_field('independent_guide_fee'); ?> per day
                      </p>
                      <p>
                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target=".bd-example-modal-sm">
                          Inquire about hiring <?php the_title();?>
                        </button>
                      </p>
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
                  </div>
                </div>
             </div><!--founderbios-->  
           </div>
           
           <!--sidebar-->
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
    
    <!-- Inquire Modal -->  
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hire a guide</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo do_shortcode('[wpforms id="7633" title="false" description="false"]'); ?> 
          </div>
        </div>
      </div>
    </div>
      
    <!-- Map Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Guide regions map</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="<?php the_field('guide_regions_map', 7621); ?>" class="img-fluid" />
          </div>
          <div class="modal-footer">
            <a href="/run-the-alps-trail-running-guide-network" class="btn btn-primary">View all guides &amp; regions</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Map Modal -->
    
  </body>
</html>