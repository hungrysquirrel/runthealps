<?php
/**
 * Template Name: Videos
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

        </div>
        <div class="col-xl-12">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content();?>
          <?php endwhile; // end of the loop. ?>
        </div>
        
      </div>
      
      <div class="row margin-top-20">
      
        <?php if( have_rows('video_group') ): ?>
        
            <?php while ( have_rows('video_group') ) : the_row(); ?>
        
                <?php if( get_row_layout() == 'video_section' ): ?>
        
                	<div class="col-xl-12 mb-4">
                  	<h3><?php the_sub_field('section_heading'); ?></h3>
                  	<p><?php the_sub_field('section_description'); ?></p>
                      <div class="row">
                        <?php if( have_rows('section_videos') ): ?>
                          <?php while( have_rows('section_videos') ): the_row(); ?>
                            <div class="col-md">
                              <div class="card mb-2">
                                <div class="card-img-top embed-container"><?php the_sub_field('video'); ?></div>
                                <div class="card-body video-card-body">
                                  
                                  <div class="video-card-title-description">
                                    <h5 class="card-title mb-0"><?php the_sub_field('video_title'); ?></h5>
                                    <p class="card-text"><?php the_sub_field('video_description'); ?></p>
                                  </div>
                                  <?php $post_object = get_sub_field('related_tours');
                                   if( $post_object ): $i++ ?>
                                    <a class="btn btn-link p-0 text-left" tabindex="0" "data-html"="true" data-popover-content="#unique-id-<?php echo $i ?>" data-toggle="popover" data-placement="auto" title="Related Trips"><i class="fas fa-info-circle"></i> Related trips</a>
                                    
                                    <div id="unique-id-<?php echo $i ?>" class="d-none">
                                      <span class="popover-body">
                                        <?php foreach( $post_object as $post): ?>
                                        <?php setup_postdata($post); ?>
                                          <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                          </a>
                                        <?php endforeach; ?>
                                      </span>
                                    </div>
                                    
                                    <?php wp_reset_postdata(); ?>
                                    <?php else : ?>
                                    <a class="btn btn-link p-0 text-left" href="/about-our-tours"><i class="fas fa-link"></i> Explore trips</a>
                                  <?php endif; ?>
                                </div>
                              </div>
                            </div>
                          <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                  </div>
        
                <?php endif; ?>
        
            <?php endwhile; ?>
        
        <?php endif; ?>
      
      </div>
          
    </div><!-- /.span12 -->
    
  </div><!--/row-->  
  <?php get_footer(); ?>
</div><!-- /container -->

</body>
</html>