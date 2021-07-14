<?php
/**
 * Template Name: Testimonials
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
  <div class="container">
    <div class="row"> 
      <div class="col-xl-12 blog-post-top-rule">
            
        <div class="row"> 
           
          <div class="col-xl-12">
              <div class="row">
                <div class="col-xl-12">
                  <header class="page-title overview no-underline">
                    <h1><?php the_title();?></h1>
                  </header>

                  <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content();?>
                  <?php endwhile; // end of the loop. ?>
                  
                  <div class="grid mb-4">                    
                    <?php              
                      if(get_field('testimonial')): ?>
                      <?php while(has_sub_field('testimonial')): ?>
                        <div class="grid-item tint-color-<?php echo(rand(0,3)); ?>">
                        <?php the_sub_field('testimonial_body'); ?>
                        <?php if(get_sub_field('testimonial_author')): ?>
                          <ul class="list-unstyled list-inline">
                            <span class="blockquote-footer">
                              <li class="list-inline-item"><?php the_sub_field('testimonial_author'); ?></li>
                              <li class="list-inline-item"><?php the_sub_field('testimonial_author_location'); ?></li>
                            </span>
                          </ul>
                        <?php endif; ?>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- /repeater	-->
                  </div><!--/grid-->

                </div>
              </div> 
              
          </div>
              
        </div>
          
    </div><!-- /.span12 -->
    
    </div><!--/row-->  
    <?php get_footer(); ?>
  </div><!-- /container -->
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

</body>
</html>