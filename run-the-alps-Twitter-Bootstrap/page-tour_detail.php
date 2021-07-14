<?php
/**
 * Template Name: Tour Detail
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
  <div class="container">
    <div class="row"> 
      <div class="col-xl-12 blog-post-top-rule">
            
        <div class="row"> 
          <div class="col-xl-3">
             <div class="sidebar-nav tours">
               
               <?php
	               $pages = get_pages( array(
		    	         'sort_order' => 'ASC',
		    	         'sort_column' => 'post_title',
		    	         'parent' => 525 )
				         );
	             ?>

	             <?php
	             	if ($post->post_parent)
	             		//I am a subpage
	             		$id = $post->post_parent;
	             	else
	             		//I am a page
	             		$id = $post->ID;
	             	  $subpages = get_pages(array("child_of"=>$id));
	             ?>
               
               		<ul>
               			<?php
               				foreach($subpages as $subpage):
               			?>
               			<li <?php if ($subpage->ID == $post->ID) echo 'class="current-page-item"'?>>
               				<a href="<?php echo get_permalink($subpage->ID); ?> "><?php echo $subpage->post_title ?></a>
               			</li>
               			<?php endforeach; ?>
               
               </ul>
             </div>
           </div>
           
           <div class="col-xl-9 tour-entry">
              <div class="row">
                <div class="col-xl-12">
                  <div class="tour-hero-image">
                    <h1><?php the_title();?></h1>
                    <img src="<?php the_field('tour_hero_photo'); ?>" class="img-fluid" /> 
                  </div>
                </div>
              </div> 
              
              <div class="row">
                <?php if(have_rows('trip_guide')): ?>
                  <div class="col-xl-12 tour-info" style="padding-bottom: 20px;">
                    <div class="row">
                      <div class="col-xl-12">
                        <h6>Guided By</h6>
                      </div>
                    </div>
                    <div class="row">
                      <?php while(have_rows('trip_guide')): the_row(); ?>
                        <div class="col-xl mb-3">
                          <div class="media" style="align-items: center;">
                          <img src="<?php the_sub_field('guide_image'); ?>" class="img-fluid align-self-center mr-3 photo" /> 
                          <div class="media-body">
                            <p class="mb-0"><a href="/guides"><?php the_sub_field('guide_name'); ?></a></p>
                            <?php if (get_sub_field('guide_tour_dates')): ?>
                            <p class="text-muted"><small class="p-0">Tour dates <?php the_sub_field('guide_tour_dates'); ?></small></p>
                            <?php endif; ?>
                          </div>
                          </div>
                        </div>
                      <?php endwhile; ?>
                    </div>
                    
                    
                  </div>
                <?php endif; ?>
              </div>
              
              <?php if (get_field('summary')): ?>
              <div class="row">
                <div class="col-xl-12 tour-info">
                  <div class="row">
                    <div class="col-xl-12">
                      <h6>Summary</h6>
                      <p><?php the_field('summary'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              
              
              <?php if (get_field('date')): ?>
              <div class="row">
                <div class="col-xl-12 tour-info">
                  <div class="row">
                    <div class="col-xl-3">
                      <h6>Date</h6>
                      <p><?php the_field('date'); ?></p>
                    </div>
                    <div class="col-xl-3">
                      <h6>Length</h6>
                      <p><?php the_field('length'); ?></p>
                    </div>
                    <div class="col-xl-3">
                      <h6>Tour Category</h6>
                      <p><?php the_field('category'); ?></p>
                    </div>
                    
                    
                    
                    <?php if (get_field('tour_challenge_range')): ?>
                      <div class="col-xl-3">
                        <h6>Tour Challenge</h6>
                        <div class="challenge-range">
                          <?php 
                            $values = get_field('tour_challenge_range');
                            foreach ($values as $value) {
                          ?>
                            <i class="fas <?php echo $value ?>"></i><span class="dash">&ndash;</span>
                            <?php } ?>
                        </div>
                        <p><small class="p-0"><a href="/run-the-alps-trip-rating-system/">Learn more</a></small></p>
                      </div>
                    <?php endif; ?>
                    
                  </div>
                </div>
              </div>
              <?php endif; ?>
              
              <?php if (get_field('fees')): ?>
              <div class="row">
                <div class="col-xl-12 tour-info">
                  <div class="row">
                    <div class="col-xl-4">
                      <h6>Fees</h6>
                      <p><?php the_field('fees'); ?></p>
                    </div>
                    <div class="col-xl-8">
                      <h6>Whats included</h6>
                      <p><?php the_field('whats_included'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              
              <div class="row">
                <div class="col-xl-12 tour-info description">
                  <div class="row">
                    <div class="col-xl-12">
                      <h6>Description</h6>
                      <?php the_field('description'); ?>
                    </div>
                  </div>
                </div>
              </div>
              
                      
              
              
              <?php if (get_field('day-by-day')): ?>
              <div class="row">
                <div class="col-xl-12 tour-info">
                  <div class="row">
                    <div class="col-xl-12">
                      <h6>Day-by-day</h6>
                      <?php the_field('day-by-day'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              
              <?php if(get_field('daily_itinerary')): $day = 0; ?>
              <div class="row">
                <div class="col-xl-12 tour-info">
                  <h6>Day-by-day</h6>
                  <?php while(has_sub_field('daily_itinerary')): $day++; ?>
                    <div class="row day">
                      <div class="col-xl-2">
                        <b>Day <?php echo $day ?></b>
                      </div>
                      <div class="col-xl-10 daily-itinerary">
                        <?php the_sub_field('itinerary_description'); ?>
                      
                        <?php if(have_rows('whats_included')): ?>
                          <div class="row">
                            <div class="col-xl-12">
                              <ul class="list-unstyled whats-included">
                                <?php while(have_rows('whats_included')): the_row(); ?>
                                  <li><i class="<?php the_sub_field('icon'); ?>"></i> <?php the_sub_field('icon_text'); ?></li>
                                <?php endwhile; ?>
                              </ul>
                            </div>
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>  
                  <?php endwhile; ?>
                </div>
              </div>
              <?php endif; ?>
              
              <div class="row">
                <div class="col-xl-12 tour-info">
                  <div class="row">
                    <div class="col-xl-12">
                      <h6>Trip stories</h6>
                      <p><a href="<?php echo get_page_link( get_page_by_title('Tour Stories')->ID ); ?>">See recent Tour Stories</a></p>
                    </div>
                  </div>
                </div>
              </div>
              
              <?php if (get_field('arrival')): ?>
              <div class="row">
                <div class="col-xl-12 tour-info">
                  <div class="row">
                    <div class="col-xl-12">
                      <h6>Arrival</h6>
                      <?php the_field('arrival'); ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-12">
                      <h6>Departure</h6>
                      <?php the_field('departure'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              
              <div class="row">
                <div class="col-xl-12 tour-info">
                  <div class="row mb-2">
                    <div class="col-xl-4">
                      <?php if (get_field('booking_partner_url')): ?>
                        <a href="<?php the_field('booking_partner_url')?>" target="_blank" class="red-btn tour-reserve">Reserve this tour</a>
                      <?php else: ?>
                        <a href="/contact" target="_blank" class="red-btn tour-reserve" style="margin-bottom: 15px;">Contact Us to Plan</a>
                      <?php endif; ?>
                    </div>
                    <div class="col-xl-8">
                      <h6>Questions</h6>
                      <p><a href="/contact">Send us a note</a></p>
                    </div>
                  </div>
                </div>
              </div>
              
              <?php if (get_field('additional_information')): ?>
              <div class="row">
                <div class="col-xl-12 tour-info">
                  <div class="row">
                    <div class="col-xl-12">
                      <h6>Additional Information</h6>
                      <?php the_field('additional_information'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              
              
              
           </div>
        </div>
          
      </div><!-- /.span12 -->
      
      </div><!--/row-->  
      <?php get_footer(); ?>
    </div><!-- /container -->
  </body>
</html>