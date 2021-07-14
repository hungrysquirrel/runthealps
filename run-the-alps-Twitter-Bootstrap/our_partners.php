<?php
/**
 * Template Name: Our Partners
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
          <div class="col-xl-12 blog-post-top-rule">
           
            <header class="page-title overview overview-without-border">
              <h1><?php the_title();?></h1>
            </header>
            
            <div class="row">
              <div class="col-xl-12 intro">
                <?php while ( have_posts() ) : the_post(); ?>
                  <?php the_content();?>
                <?php endwhile; // end of the loop. ?>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xl-12 our-partners">
              <?php 
                
               $repeater = get_field('partner');
                                
               foreach( $repeater as $key => $row )
               {
                   $column_id[ $key ] = $row['id'];
               }
                
               array_multisort( $column_id, SORT_REGULAR, $repeater );
                
               foreach( $repeater as $row )
               {
               	 $partner_name = $row['partner_name'];
               	 $partner_website = $row['partner_website'];
               	 $partner_logo = $row['partner_logo'];
               	 $partner_summary = $row['partner_summary'];
               	 
               	   echo '<div class="row our-partner-info">';
               	     echo '<div class="col-xl-12 our-partner-row">';
               	       echo '<div class="row">';
               	         echo '<div class="col-xl-12">';
               	           echo '<a href='  . $partner_website .  ' class="our-partner-logo"> <img src=' . $partner_logo . ' /> </a>';
               	         echo '</div>';
               	       echo '</div>';
               	    
               	       echo '<div class="row">';
               	         echo '<div class="col-xl-12">';
               	           echo '<h2><a href='. $partner_website .'>' . $partner_name . '</a></h2>';
               	           echo $partner_summary;
               	         echo '</div>';
               	       echo '</div>';
               	     echo '</div>';
               	   echo '</div>'; 
               	 
               }
                
               ?>
              </div>
              <div class="col-xs-12">
                <?php the_field('closing_partner_information') ?>
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