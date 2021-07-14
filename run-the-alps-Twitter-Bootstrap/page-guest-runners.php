<?php
/**
 * Template Name: Guest Runners
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */

get_header(); ?>

<div class="container">
   <div class="row">
     <div class="col-xl-12 blog-post-top-rule">
       
      <div class="row">
	      <div class="col-xl-12 mb-2">
					<header class="page-title">
					  <h1><?php the_title();?></h1>
					</header>
      
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content();?>
					<?php endwhile; // end of the loop. ?>
				</div>
      </div>
       
      <div class="row">
	      <div class="col-xl-8">
	 		  <?php
	 		  	// check if the flexible content field has rows of data
	 		  	if( have_rows('runners') ):
	 		  	
	 		  	// loop through the rows of data
	 		  	while ( have_rows('runners') ) : the_row();
	 		  
	 		  		// check current row layout
	 		      if( get_row_layout() == 'runner_list' ):
	 		      
	 		      	$text = get_sub_field('heading');
	 		      	echo '<h2 class="mb-4">' . $text . ' Guest Trail Runners</h2>';
	 		  
	 		      	// check if the nested repeater field has rows of data
	 		      	if( have_rows('runner') ):
	 		  
	 							echo '<div class="row">';
	 		  				
	 		  				// loop through the rows of data
	 		  			  while ( have_rows('runner') ) : the_row();
	 		  					
	 		  					$image = get_sub_field('runner_image');
	 		  					$name = get_sub_field('runner_name');
	 		  					$bio = get_sub_field('runner_bio');
	 		  					
	 		  					
	 		  					echo '<div class="col-xl-12">';
	 		  						echo '<div class="row">';
	 		  						
	 										echo '<div class="col-xl-2">';
	 											echo '<img src="'. $image . '" class="img-fluid mb-4" />';
	 										echo '</div>';
	 										
	 										echo '<div class="col-xl-10">';
	 											echo '<h4>'. $name . '</h4>';
	 											echo '<div>' .$bio. '</div>';
	 										echo '</div>';
	 										
	 		  						echo '</div>';
	 		  						echo '<hr class="mt-3 mb-4" />';
	 		  					echo '</div>';
	 		  	
	 		  
	 		  				endwhile;
	 		  
	 							echo '</div>';
	 		  
	 		  			endif;
	 		  
	 		      endif;
	 		  
	 		    endwhile;
	 		  
	 				else :
	 		  
	 		      // no layouts found
	 		  
	 		  endif; ?>
	    </div><!--/col-->
	    <div class="col-xl-4">
  	    <?php get_template_part('/includes/newsletter_signup_rev'); ?>
	    </div>
      </div><!--/row-->
	   
	 
     </div><!-- /.span8 -->
   </div>
   <?php get_footer(); ?>
</div>
