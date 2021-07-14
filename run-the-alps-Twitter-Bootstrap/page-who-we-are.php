<?php
/**
 * Template Name: Who We Are
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
          
          <div class="col-xl-12 banner-image">
            <img src="<?php the_field('who_we_are_top_image_banner'); ?>" class="img-fluid" />
          </div>
          
          <div class="col-xl-12 mb-2">
          	<header class="page-title">
						  <h1><?php the_title();?></h1>
						</header>
          </div>
          
          
          <div class="col-xl-12 who-we-are-intro">
            <?php the_field('who_we_are_intro'); ?>
          </div>
            
          <div class="row"> 
           <div class="col-xl-8">
               <div class="founders-about">
               <!-- repeater	-->
  	    	       <?php              
                 if(get_field('who_we_are')): ?>
                 <?php while(has_sub_field('who_we_are')): ?>
                   <div class="row founder-bio">
                   <div class="col-xl-3">
                     <img class="founder-photo" src="<?php the_sub_field('member_photo'); ?>"/>
                   </div>
                   <div class="col-xl-9">
                       <div class="founder-title">
                         <h2><?php the_sub_field('member_name'); ?></h2>
                         <p><small><?php the_sub_field('member_title'); ?></small></p>
                       </div>
                       <div class="bio-profile">
                         <p><strong class="section-title">Hometown</strong><?php the_sub_field('hometown'); ?></p>
                       </div>
                       <div class="bio-profile">
                         <p><strong class="section-title">A bit about me</strong><?php the_sub_field('a_bit_about_me'); ?></p>
                       </div>
                       <div class="bio-profile">
                         <p><strong class="section-title">My other life</strong><?php the_sub_field('my_other_life'); ?></p>
                       </div>
                       <div class="bio-profile">
                         <p><strong class="section-title">In my free time</strong><?php the_sub_field('in_my_free_time'); ?></p>
                       </div>
                       <div class="bio-profile">
                         <p><strong class="section-title">Fun Fact</strong><?php the_sub_field('fun_fact'); ?></p>
                       </div>
                       <div class="bio-profile">
                         <p><strong class="section-title">Favorite Alp trail run</strong><?php the_sub_field('favorite_swiss_alp_trail_run'); ?></p>
                       </div>
                       <?php if( get_sub_field('guiding_since') ): ?>
                         <div class="bio-profile">
												 	<p><strong class="section-title">Guiding since</strong><?php the_sub_field('guiding_since'); ?></p>
                       	 </div>
                       <?php endif; ?>
                   </div>
                   </div>
                   <?php endwhile; ?>
                   <?php endif; ?>
                 <!-- /repeater	-->
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