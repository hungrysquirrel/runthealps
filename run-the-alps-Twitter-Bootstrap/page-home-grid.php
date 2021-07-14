<?php
/**
 * Template Name: Home Grid
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>

  <div id="myCarousel"class="carousel slide" data-interval="5000">
    <!-- Carousel items -->
    <div class="carousel-inner">
      <!-- repeater	-->
      <?php if(have_rows('home_page_image_carousel')): ?>
      <?php while(have_rows('home_page_image_carousel')): the_row(); ?>
        <?php if(get_sub_field('photo_visibility') == 'show' ): ?>
        <div class="carousel-item">
          <a href="<?php the_sub_field('carousel_link'); ?>" class="carousel-link">
            <img class="img-fluid" src="<?php the_sub_field('carousel_image'); ?>"/>
            <div class="custom-carousel-caption">
              <div class="headline-block">
                <div class="container">
                <div class="row">
                <div class="col-xl-12">
                <h2><?php the_sub_field('carousel_image_headline'); ?></h2>
                <h3><?php the_sub_field('carousle_image_subheading'); ?> &rarr;</h3>
                </div>
                </div>
                </div>
              </div>
            </div>
            <div class="photographer-credit">
              <small>&copy;<?php the_sub_field('carousel_image_photo_credit'); ?></small>
            </div>
           </a>
        </div>
        <?php endif; ?>
      <?php endwhile; ?>
      <?php endif; ?>
      <!-- /repeater	-->
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
  </div>
  
  <div class="core-values">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="row">
            <!-- repeater	-->
            <?php if(have_rows('homepage_core_values')): ?>
              <?php while(have_rows('homepage_core_values')): the_row(); ?>
                <div class="col-xl-4 col-md-4">
                  <h3><?php the_sub_field('core_value_title'); ?></h3>
                  <?php the_sub_field('core_value_description'); ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container sbs-content-wrapper homepage-section">
    <div class="row"> 
     <div class="col-xl-12">
       <div class="row home-page-section-content-heading">
         <div class="col-xl-12">
           <h2><?php the_field('our_trips_heading'); ?></h2>
           <?php the_field('our_trips_sub_text'); ?>
         </div>
       </div>
       
       <div class="row">
         <div class="col-xl-12">
           <div class="row">
           <!-- repeater	-->
            <?php if(have_rows('our_trips')): ?>
              <?php while(have_rows('our_trips')): the_row(); ?>
                <div class="col-xl-4 trip-item col-md-4">
                  <div class="trip-photo-holder">
                    <div class="trip-season"><?php the_sub_field('trip_season'); ?></div>
                    <img class="img-fluid" src="<?php the_sub_field('trip_photo'); ?>" />
                  </div>
                  <h3><?php the_sub_field('trip_title'); ?></h3>
                  <?php the_sub_field('trip_description'); ?>



                  <?php if(get_sub_field('trip_link')) 
                    {
                      echo '<a href=" ' . get_sub_field('trip_link') . ' " class="trip-item-link">Learn more </a>' ; 
                    }
                  ?>
                  
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
            </div>
           </div>
         </div>
       </div>
       
     </div>
    </div>
  </div>
       
       
       
      
  <!-- Begin Template Content -->
    <div class="container sbs-content-wrapper homepage-section no-border no-bottom-padding">
      <div class="row"> 
       <div class="col-xl-12">
         
         
         <div class="row">
           <div class="col-xl-8">
             <div class="row home-page-section-content-heading">
               <div class="col-xl-12">
                 <h2>News and events</h2>
               </div>
             </div>
             <div class="row short-blog-entry home-page">
               
                 <?php if (is_front_page()) { ?>
                 <?php
                   global $post;
                   $myposts = get_posts('numberposts=1');
                   foreach($myposts as $post) :
                   	setup_postdata($post);
                 ?>
               
               <div class="col-xl-12 short-blog-excerpt">
                 <div class="row">
                   <div class="col-xl-12">
                    <header class="post-title-homepage">
                       <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                         <h3><?php the_title();?></h3>
                       </a>
                       <p class="meta text-muted"><?php echo bootstrapwp_posted_on();?></p>
                    </header>
                   </div>
                 </div>
                 
                 <div class="row">
                   <div class="col-xl-12 post-excerpt-homepage">
                     <?php the_excerpt();?>
                   </div>
                 </div>
                 
                 <div class="row">
                   <div class="col-xl-12">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/KRQPz3clRHM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   </div>
                 </div>
                 
                 <?php endforeach; } ?>

                 
                <!-- Begin MailChimp Signup Form -->
<!--
                  <div id="mc_embed_signup" class="laces-homepage row">
                    <div class="col-xl-8">
                    <form action="http://runthealps.us4.list-manage.com/subscribe/post?u=78f317c106f0e913583f17c21&amp;id=2f803eb66b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate override clearfix" target="_blank" novalidate>
                      <div class="form-group col-xs-12 col-xl-12">
                        <h3>Laces <img class="img-fluid" src="http://runthealps.com/wp-content/uploads/2013/04/lace.gif" /></h3>
                        <p>Get the latest news from Run the Alps.</p>
                      </div>
                      <div class="form-group col-xs-12 col-xl-12">
                      <div class="input-group">
                        <input type="email" value="" name="EMAIL" class="override form-control" id="mce-EMAIL" placeholder="email address" required>
                        <span class="input-group-btn"><input type="submit" value="Signup" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary"></span>
                      </div>
						  <div class="mc-field-group input-group" style="display: none;">
    <ul>
    <li><input type="checkbox" value="128" name="group[18661][128]" id="mce-group[18661]-18661-7" checked><label for="mce-group[18661]-18661-7">Run the Alps Blog Updates</label></li>
</ul>
</div>
                      </div>
                    </form>
                    </div>
                    <div class="col-xl-4 col-md-5">
                      <?php get_template_part('/includes/bookpromo'); ?>
	                  </div>
                  </div> 
-->
                <!--End mc_embed_signup-->
                  
               </div>
             </div>
           </div><!-- /.span8 -->
           
           <div class="col-xl-4">
             <?php get_template_part('/includes/newsletter_signup_rev'); ?>
             <h4 class="widget-title">Facebook</h4>
             <div class="fb-page" data-href="https://www.facebook.com/runalps" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/runalps"><a href="https://www.facebook.com/runalps">Run The Alps</a></blockquote></div></div>
           
           <div class="row">
             <span>
           </div>

           
         </div>
       </div>
     </div>
   </div>
   <div class="sbs-content-wrapper homepage-section">
     
       <?php get_footer(); ?>
     
   </div>
  </body>
</html>