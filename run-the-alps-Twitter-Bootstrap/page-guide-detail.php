<?php
/**
 * Template Name: Guide Detail
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
                     <img class="founder-photo" src="<?php the_field('member_photo'); ?>"/>
                   </div>
                   <div class="col-xl-9">
                      
                      <header class="page-title">
                      	<p class="mb-0">Run the Alps Guide</p>
                        <h1><?php the_title();?></h1>
                      </header>
                      
                      <div class="founder-title">
                        <h2><?php the_sub_field('member_name'); ?></h2>
                        <p><small><?php the_sub_field('member_title'); ?></small></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">Hometown</strong><?php the_field('hometown'); ?></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">A bit about me</strong><?php the_field('a_bit_about_me'); ?></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">My other life</strong><?php the_field('my_other_life'); ?></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">In my free time</strong><?php the_field('in_my_free_time'); ?></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">Fun Fact</strong><?php the_field('fun_fact'); ?></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">Favorite Alp trail run</strong><?php the_field('favorite_swiss_alp_trail_run'); ?></p>
                      </div>
                      <?php if( get_field('guiding_since') ): ?>
                        <div class="bio-profile">
											  	<p><strong class="section-title">Guiding since</strong><?php the_field('guiding_since'); ?></p>
                      	 </div>
                      <?php endif; ?>
                      <div class="bio-profile">
                        <p><a href="/guides">See all Run the Alps guides</a></p>
                      </div>
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