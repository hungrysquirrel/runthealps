<?php
/**
 * Template Name: Virtual Tour Detail
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: September 27, 2020
 */
get_header(); ?>
<!-- Begin Template Content -->

  <div class="container-fluid">  
    <div class="row mt-4">
      
       
      <div class="col-lg-1">
        <div class="sticky-top" style="top: 50px;">
          
          <?php
	          $pages = get_pages( array(
		          'sort_order' => 'ASC',
		          'sort_column' => 'post_title',
		          'parent' => 7557 )
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
          
         <!--<ul>
           <?php
           	foreach($subpages as $subpage):
           ?>
           <li <?php if ($subpage->ID == $post->ID) echo 'class="current-page-item"'?>>
           	<a href="<?php echo get_permalink($subpage->ID); ?> "><?php the_field('tour_day_number'); ?> <?php echo $subpage->post_title ?> </a>
           </li>
           <?php endforeach; ?>
           <li><a href="/?swpm-logout=true">logout</a></li>
          </ul>-->
          
          <ul class="nav flex-column nav-pills">
            <?php foreach($subpages as $subpage): $counter++; ?>
              <li class="nav-item">
                <a 
                  href="<?php echo get_permalink($subpage->ID); ?>"
                  class="<?=$subpage->ID == $post->ID ? 'active nav-link' : 'nav-link'; ?>"
                >
<!--                   Day <?php echo $counter;?> -->
                  <?php echo $subpage->post_title ?>
                </a>
              </li>
            <?php endforeach; ?>
            
            <li class="nav-item"><a href="/?swpm-logout=true" class="nav-link">logout</a></li>
          </ul>
          
          
        </div>
      </div>
      
      
      <div class="col-lg-11"> 
        <div class="row">
          <div class="col-lg-12 m2-4">
            <div class="mb-4"><h1><?php the_field('tour_day_title');?></h1></div>
          </div>
        </div>
         
        <div class="row">
          <div class="col-lg-12 mb-4">
            <img src="<?php the_field('hero_image'); ?>" style="width: 100%; height: 400px; object-fit: cover;" />
            
            <ul class="list-group list-group-horizontal-lg shadow" style="width: 90%; margin: -20px auto;">
              <?php while(has_sub_field('daily_stats')): ?>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-fill">
                <span><i class="fas fa-running"></i>
                Distance</span>
                <span class="badge badge-primary badge-pill"><?php the_sub_field('distance'); ?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-fill">
                <span><i class="fas fa-arrow-up fa-rotate-45"></i>
                Elevation gain</span>
                <span class="badge badge-primary badge-pill"><?php the_sub_field('climbing_distance'); ?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-fill">
                <span><i class="fas fa-arrow-down fa-rotate-minus-45"></i>
                Elevation loss</span>
                <span class="badge badge-primary badge-pill"><?php the_sub_field('descending_distance'); ?></span>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>
        
        
        <div class="row justify-content-md-center">
          <?php if( have_rows('fun_fact') ): ?>
            <div class="col-lg-10 mb-4" style="margin: 50px 0;">
              <?php while( have_rows('fun_fact') ): the_row(); 
                // Get sub field values.
                $image = get_sub_field('fun_fact_image');
                $copy = get_sub_field('fun_fact_copy');
                $attribution = get_sub_field('fun_fact_attribution');
              ?>
              <div class="card shadow" style="overflow: hidden;">
                <div class="row no-gutters">
                  
                  <div class="col-md-3">
                    <img src="<?php echo esc_url( $image ); ?>" class="img-fluid card-image" style="object-fit: cover; height: 100%; width: 100%;" />
                  </div>
                  
                  <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Fun fact</h5>
                        <div class="card-text">
                          <span style="font-size: 13px;"><?php echo( $copy ); ?></span>
                          <?php if (get_sub_field('fun_fact_attribution')): ?>
                            <p class="blockquote-footer"><small class="text-muted"><?php echo($attribution); ?></small></p>
                          <?php endif; ?>
                        </div>
                      <?php endwhile; ?>
                    </div><!-- /card body -->
                  </div>
                </div>
              </div><!-- /card -->
            </div><!-- /col 12 -->
          <?php endif; ?>
        </div>
        
        
        <?php if (get_field('overview')): ?>
          <div class="row">
            <div class="col-lg-12 my-4">
              <h3>Overview</h3>
                <div style="column-count: 2;">
                  <?php the_field('overview'); ?>
                </div>
            </div>
          </div>
        <?php endif; ?>
        
        
        <div class="row my-4">
          <div class="col-lg-12">
            <?php the_field('map'); ?>
          </div>
        </div>
        
        
        <?php if (get_field('description')): ?>
        <div class="row">
          <div class="col-lg-12 my-4">
            <div>
              <h3>Description</h3>
              <p><?php the_field('description'); ?></p>
            </div>
          </div>
        </div>
        <?php endif; ?>
        

        <div class="row">
          <div class="col-lg-12 my-4">
            <h3 class="mb-4">Tour milestones</h3>
              <?php if( have_rows('tour_milestone') ): ?>
                <?php while( have_rows('tour_milestone') ): the_row(); ?>
                  <?php if( get_row_layout() == 'video' ): ?>
                    <div class="mb-5">
                      <h5><?php the_sub_field('milestone_title'); ?></h5>
                      <hr class="mt-0"/>
                      <?php the_sub_field('milestone_description'); ?>
                      <?php while(has_sub_field('video')): ?>
                        <strong><?php the_sub_field('video_title'); ?></strong>
                        <?php the_sub_field('video_summary'); ?>
                        <div class="embed-responsive embed-responsive-16by9"><?php the_sub_field('video_embed'); ?></div>
                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                    
                  <?php if( get_row_layout() == 'image' ): 
                    $image = get_sub_field('image');
                  ?>
                    <div class="mb-5">
                      <h5><?php the_sub_field('milestone_title'); ?></h5>
                      <hr class="mt-0"/>
                      <?php the_sub_field('milestone_description'); ?>  
                      <?php 
                        $images = get_sub_field('images');
                        if( $images ): ?>
                          <ul>
                            <?php foreach( $images as $image ): ?>
                              <li>
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" style="width: 100%; height: 500px; object-fit: cover;" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <p class="text-muted"><small><?php echo esc_html($image['caption']); ?></small></p>
                                <?php if ($image['description']): ?><p class="text-center lead" style="font-family: 'Georgia'; padding: 40px 30%;"><?php echo esc_html($image['description']); ?></p><?php endif ?>
                              </li>
                            <?php endforeach; ?>
                          </ul>
                        <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  
                  <?php if( get_row_layout() == 'text' ): ?>
                    <div class="mb-5">
                      <h5><?php the_sub_field('milestone_title'); ?></h5>
                      <hr class="mt-0"/>
                      <?php the_sub_field('text'); ?>
                    </div>
                  <?php endif; ?>
                
                <?php endwhile; ?>
              <?php endif; ?>
          </div>
        </div>        
        

        
      </div><!-- end col 11  -->
    </div><!-- end row  --> 
    </div><!-- end row  -->  
    <?php get_footer(); ?>
  </body>
</html>