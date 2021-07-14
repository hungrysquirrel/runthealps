<?php
/**
 * Template Name: Projects
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */

get_header(); ?>

    <div class="span12 projects-page">
      <header class="page-title">
        <h1>Projects</h1>
      </header>
      <div class="row">
        <?php
        // Blog post query
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts( array( 'post_type' => 'post', 'paged'=>$paged, 'showposts'=>10) );
        if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        
          <div class="span4 project">
          <div <?php post_class(); ?>>
			      
		        <?php      
            // or the_repeater_field + the_sub_field
            if(get_field('project_images')): $count = 0 ?>
            	<?php while(has_sub_field('project_images')): $count++; ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                  <img src="<?php the_sub_field('image'); ?>"/> 
                  <header class="post-title">
                    <h1><?php the_title();?></h1>
                    <p class="location"><?php the_field('project_location'); ?></p>
                  </header>
                </a>
              <?php if($count==1) break; ?>
            	<?php endwhile; ?>
            <?php endif; ?>

          </div>
          </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="row">
        <div class="span7">
          <?php bootstrapwp_content_nav('nav-below');?>
        </div>
      </div>
      <?php get_footer(); ?>
    </div>