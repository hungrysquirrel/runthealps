<?php
/**
 * Template Name: Self Guided Tour Descriptions
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
		    	         'parent' => 2221 )
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
              
              <?php if (get_field('summary')): ?>
              <div class="row">
                <div class="col-xl-12 tour-info">
                  <div class="row">
                    <div class="col-xl-12">
                      <h6>Summary</h6>
                      <?php the_field('summary'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              
              
              <div class="row">
                <div class="col-xl-12 tour-info">
                  <div class="row">
                    <div class="col-xl-4">
                      <?php if (get_field('booking_partner_url')): ?>
                        <a href="<?php the_field('booking_partner_url')?>" target="_blank" class="red-btn tour-reserve">Sign Up</a>
                      <?php else: ?>
                        <a href="/contact" target="_blank" class="red-btn tour-reserve" style="margin-bottom: 15px;">Contact Us to Plan</a>
                      <?php endif; ?>
                    </div>
                    
                    <div class="col-xl-4">
                      <h6>Questions</h6>
                      <p><a href="/request-more-info-about-self-guided-tours/?5Self-Guided-Tour=Self Guided <?php the_title();?>">Send us a note</a></p>
                    </div>
                    
                    <?php if (get_field('tour_challenge_range')): ?>
                      <div class="col-xl-4">
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
              
              <?php if (get_field('for_more_information')): ?>
              <div class="row">
                <div class="col-xl-12">
                  <h6>For more information</h6>
                  <?php while(has_sub_field('for_more_information')): ?>
                
                    <p>
                      <?php the_sub_field('link_description'); ?>
                      <?php 
                        $post_object = get_sub_field('link');
                        if( $post_object ): 
                      
                        // override $post
                        $post = $post_object;
                        setup_postdata( $post ); 
                      
                      ?>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    </p>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
              </div>
              <?php endif; ?>

              <div class="row">
                <hr>
                <div class="col-xl-12">
                  <h6>Self-Guided Tour FAQ</h6>
                  <p><?php the_field('self_guided_faq'); ?></p>
                </div>
              </div>
              
           </div>
        </div>
          
      </div><!-- /.span12 -->
      
      </div><!--/row-->  
      <?php get_footer(); ?>
    </div><!-- /container -->
  </body>
</html>