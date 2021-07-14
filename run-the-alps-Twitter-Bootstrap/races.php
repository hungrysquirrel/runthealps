<?php
/**
 * Template Name: Races
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
                <?php the_field('races_intro'); ?>
              </div>
            </div>
          </div>
        </div>
            
        <div class="row"> 
           <div class="col-xl-8">
              <div class="races">
               
               <?php
                 $repeater = get_field('race_event');
                 foreach( $repeater as $key => $row )
                   { 
                     $column_id[ $key ] = $row['race_date'];
                   } 
                   array_multisort( $column_id, SORT_ASC, $repeater );
      
      
                   $currMonth = "start";
                   foreach( $repeater as $row ) :
                   {
                     $date = DateTime::createFromFormat('Ymd', $row['race_date']);
                     $race_end_date = DateTime::createFromFormat('Ymd', $row['race_end_date']); 
                     $website_url = $row['race_website'];
                     $country = $row['race_country'];
                    
                     echo '<div class="row race-month">';
                     echo '<div class="col-xl-12">';
                     
                     if ($currMonth != $date->format('F')) :
                       
                       {
                         echo '<strong class="month-heading" id="month-'. $date->format('m') .'">' . $date->format('F') . '</strong>';
                         $currMonth = $date->format('F');
                        }
                      endif;
                       
                        echo '<div class="row race-overview">';
                          echo '<div class="col-xl-12 race-overview-top-border">';
                          echo '<div class="row">';
                          echo '<div class="col-xl-4">';
                            echo '<a href=' . $website_url . '><img class="img-fluid" src='. $row['race_promo_photo'] .' alt="'. $row['race_name'] .'" /></a>'; 
                          echo '</div>';
                          
                          echo '<div class="col-xl-8">';
                            echo '<div class="row">';
                              echo '<div class="col-xl-6">';
                                echo '<ul class="race-info">';
	    	                          echo '<li><small class="text-muted">Name / Location</small><h2>' . $row['race_name'] . '</h2></li>';
	    	                          
	    	                          if ($race_end_date != "") :
	    	                          {
	    	                            echo '<li><small class="text-muted">Date</small> ' . $date->format('F d, Y') . ', &ndash; '. $race_end_date->format('F d, Y') .'</li>';
	    	                          }
	    	                          else: {
	    	                            echo '<li><small class="text-muted">Date</small> ' . $date->format('F d, Y') .'</li>';
	    	                          }
	    	                          endif;
	    	                          
	    	                        echo '</ul>';
	    	                      echo '</div>';
	    	                      
	    	                      echo '<div class="col-xl-6">';
	    	                        echo '<ul class="race-info">';
	    	                          echo '<li><small class="text-muted" >Distance</small> ' . addslashes($row['race_distance']) . '</li>';
	    	                          echo '<li><small class="text-muted">Vertical</small> ' . addslashes($row['race_vertical']) . '</li>';
	    	                        echo '</ul>';
	    	                      echo '</div>';
	    	                    
	    	                    echo '</div>';
	    	                    
	    	                    echo '<div class="row">';
	    	                      echo '<div class="col-xl-12">';
	    	                        echo '<div class="row">';
                                  echo '<div class="col-xl-6">';
                                    if ($website_url != "") :
	    	                              {
	    	                                echo '<p class="race-info"><small class="text-muted">Race website</small> <a href=' . $website_url . '> ' . $website_url . ' </a></p>';
	    	                              }
	    	                            endif;
	    	                          echo '</div>';
	    	                          
	    	                          echo '<div class="col-xl-6">';
                                    if ($country != "") :
	    	                              {
	    	                                echo '<p class="race-info"><small class="text-muted">Country</small> '. $country .' </p>';
	    	                              }
	    	                            endif;
	    	                          echo '</div>';
	    	                        echo '</div>';
	    	                      echo '</div>';
	    	                    echo '</div>';  
	    	                      
	    	                    echo '<div class="row">';
	    	                      echo '<div class="col-xl-12">';
	    	                        echo $row['race_description'];
	    	                      echo '</div>';
	    	                    echo '</div>';
	    	                      
	    	                    
	    	                  echo '</div>';
	    	                echo '</div>'; #<!-- /end race-overview-top-border	-->
	    	                echo '</div>'; #<!-- /end race-overview-top-border	-->
	    	                echo '</div>'; #<!-- /end race-overview	-->
	    	                  
	    	                
	    	                
	    	                echo '</div>'; #<!-- /end span8	-->
	    	                echo '</div>'; #<!-- /end race-month	-->
	    	               }
                   
                   endforeach;
                   ?>
                       
                 <!-- /repeater	-->
              </div><!--races-->  
           </div>
           <div class="col-xl-4">
             <div class="sidebar-nav race-nav">
               <div class="month-heading">Months</div>
               <ul class="list-of-links">
               <li><a href="#month-01">January</a></li>
               <li><a href="#month-02">February</a></li>
               <li><a href="#month-03">March</a></li>
               <li><a href="#month-04">April</a></li>
               <li><a href="#month-05">May</a></li>
               <li><a href="#month-06">June</a></li>
               <li><a href="#month-07">July</a></li>
               <li><a href="#month-08">August</a></li>
               <li><a href="#month-09">September</a></li>
               <li><a href="#month-10">October</a></li>
               <li><a href="#month-11">November</a></li>
               <li><a href="#month-12">December</a></li>
               </ul> 
             </div>
           </div>
        </div>
          
      </div><!-- /.span12 -->
        <?php get_footer(); ?>
      </div><!--/row-->  
    </div><!-- /container -->
  </body>
</html>