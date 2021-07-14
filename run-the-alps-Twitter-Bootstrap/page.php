<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */

get_header(); ?>

<div class="container sbs-content-wrapper">
  <div class="row"> 
    <div class="col-xl-12">
    
      <div class="row">
        <div class="col-xl-8 blog-post-top-rule">
          <header class="page-title overview overview-without-border">
            <h1><?php the_title();?></h1>
          </header>
        </div>
      </div>
      
      <div class="row"> 
        <div class="col-xl-8">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content();?>
          <?php endwhile; // end of the loop. ?>
        </div>
        <div class="col-xl-4">
          <?php get_template_part('/includes/newsletter_signup_rev'); ?>
	      </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
</div>





