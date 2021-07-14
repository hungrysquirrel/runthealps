<?php
/**
 * Template Name: Races Permalink Page
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
          <div class="col-xl-8 blog-post-top-rule">
            <header class="page-title overview overview-without-border">
              <h1><?php the_title();?></h1>
            </header>
          </div>
        </div>
            
        <div class="row"> 
          <div class="col-xl-8">
            <div class="races">
              <div class="row race-overview">
                <div class="col-xl-12">
                  <div class="row">
                    
                    <div class="col-xl-12">
                      <a href="<?php the_field('race_website'); ?>">
                        <img class="img-fluid" src="<?php the_field('race_promo_photo'); ?>" alt="<?php the_title();?>">
                      </a>
                    </div>

                    <div class="col-xl-12">
                      <div class="row">
                        
                      
                        <div class="col-xl-6">
                          <div class="row">
                            <div class="col-xl-12">
                              <p class="race-info">
                                <small class="text-muted">Date</small>
                                <?php 
                                  // get raw date
                                  $start_date = get_field('race_begin_date', false, false);
                                  // make date object
                                  $start_date = new DateTime($start_date);

                                ?>
                                <?php echo $start_date->format('m/d/Y'); ?>

                                
                                <?php if(get_field('race_ending_date')): ?>&ndash; 
                                  <?php 
                                    $end_date = get_field('race_ending_date', false, false);
                                    $end_date = new DateTime($end_date);
                                  ?>
                                  <?php echo $end_date->format('m/d/Y'); ?>    
                                <?php endif; ?>
                                
  

                                  
                              </p>
                            </div>
                            <div class="col-xl-12">
                              <p class="race-info">
                                <small class="text-muted">Country</small>
                                <?php the_field('race_country'); ?>
                              </p>
                            </div>
                            <div class="col-xl-12">
                              <p class="race-info">
                                <small class="text-muted">Race website</small>
                                <a target="_blank" href="<?php the_field('race_website'); ?>"><?php the_field('race_website'); ?></a>
                              </p>
                            </div>
                          </div>
                        </div>
                        
                        
                        <div class="col-xl-6">
                          <div class="row">
                            <div class="col-xl-12">
                              <p class="race-info">
                                <small class="text-muted">Distance</small> 
                                <?php the_field('primary_race_distance'); ?>
                                <?php if (get_field('secondary_race_distances')): ?>
                                  &nbsp;<?php the_field('secondary_race_distances'); ?>
                                <?php endif; ?>
                              </p>
                            </div>
                            <div class="col-xl-12">
                              <p class="race-info">
                                <small class="text-muted">Elevation</small> 
                                <?php the_field('race_vertical'); ?>
                                &nbsp;<?php the_field('secondary_race_verticals'); ?>
                              </p>
                            </div>
                          </div>
                        </div>
                        
                        <?php if( get_field('show_book_this_race_button') ): ?>
                          <div class="col-xl-12">
                            <a class="btn btn-primary" href="https://runthealps.com/trail-race-with-run-the-alps/">Add this race to your Run the Alps tour</a>
                          </div>
                        <?php endif; ?>

                      </div>
                    </div>
                    
                    <div class="col-xl-12">
                      <hr />
                      <p class="race-info my-0">
                        <small class="text-muted">Description</small>
                      </p>
                      <?php the_field('race_details'); ?>
                    </div>
                    
                    <?php if(get_field('race_more_about')): ?>
                    	<div class="col-xl-12">
                    	  <hr />
                    	  <p class="race-info my-0">
                    	    <small class="text-muted">Read more about this race</small>
                    	  </p>
                    	  <?php the_field('race_more_about'); ?>
                    	</div>
                    <?php endif; ?>

                    <div class="col-xl-12">
                      <p>
                        <a href="<?php $parentLink = get_permalink($post->post_parent); echo $parentLink; ?>">View a listing of all races</a>
                      </p>
                    </div>

<!--
                    <div class="col-xl-12">
                      <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
                    </div>
-->
                    <?php $post_objects = get_field('stories_about_this_race');
                      if( $post_objects ): ?>
                        <div class="col-xl-12">
                          <hr />
                          <p class="race-info mb-4"><small class="text-muted">Read Run the Alps stories about this race</small></p>
                          <ul class="list-unstyled">
                          <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                              <?php setup_postdata($post); ?>
                              <a href="<?php the_permalink(); ?>">
                              <li class="media mb-4">
                                  <div class="mr-3" style="width: 64px; height: 64px;">
                                    <?php the_post_thumbnail('thumbnail', array('class' => 'align-self-center img-fluid')); ?>
                                  </div>
                                  <div class="media-body" style="align-self: center;">
                                    <h5 class="mt-0 mb-1"><?php the_title(); ?></h5>
                                  </div>
                              </li>
                              </a>
                          <?php endforeach; ?>
                          </ul>
                          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        </div>
                    <?php endif; ?>

                  </div>
                </div>

              </div><!--/race-overview-->
            </div><!--/races-->
          </div>
          <div class="col-xl-4">
            <?php get_template_part('/includes/newsletter_signup_rev'); ?>
	        </div>
        </div>

      </div>
    </div><!-- /.span12 -->
    <?php get_footer(); ?>
  </div><!--/row-->  

</body>
</html>