<?php
/**
 * Template Name: Virtual Tour Extra Content
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
         
          <ul class="nav flex-column nav-pills">
            <?php foreach($subpages as $subpage): $counter++; ?>
              <li class="nav-item">
                <a 
                  href="<?php echo get_permalink($subpage->ID); ?>"
                  class="<?=$subpage->ID == $post->ID ? 'active nav-link' : 'nav-link'; ?>"
                >
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
            <div class="mb-4"><h1><?php the_field('page_title');?></h1></div>
          </div>
        </div>
         
        <div class="row">
          <div class="col-lg-12 mb-4">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content();?>
            <?php endwhile; // end of the loop. ?>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <?php while(has_sub_field('videos')): ?>
              <div class="mb-5">
              <h5><?php the_sub_field('video_title'); ?></h5>
              <?php the_sub_field('video_summary'); ?>
              <div class="embed-responsive embed-responsive-16by9"><?php the_sub_field('video_embed'); ?></div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
                
    </div><!-- end row  --> 
  </div> 
  <?php get_footer(); ?>
  </body>
</html>