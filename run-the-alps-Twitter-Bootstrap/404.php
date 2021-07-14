<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.7
 *
 * Last Revised: January 22, 2012
 */
get_header(); ?>
  <div class="container sbs-content-wrapper">
    <div class="row">
       <div class="span12 about-story">
         <div class="row">
           <div class="span8 about-body-copy">
           
             <header class="page-title overview no-underline">
               <h1>Oops! Page not found.</h1>
             </header>
             
             <p>Please make sure the URL you are using is correct or quite possibly that page has moved to a new location.</p>
             <p>Feel free to contact us if you have any questions <a href="/contact">contact us</a>.</p>
             
           </div>
         </div>
       </div>
       <?php get_footer(); ?>
    </div>
  </div>