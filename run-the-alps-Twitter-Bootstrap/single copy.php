<?php
/**
 * The template for displaying all posts.
 *
 * Default Post Template
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="container sbs-content-wrapper">
      <div class="row"> 
          <div class="col-xl-12 blog-post-top-rule">
            <div class="row">
              <div class="col-xl-8 blog-post">
                <div class="row">
                  <!--<div class="span1">
                    <div class="author-photo"><?php userphoto_the_author_photo() ?></div>
                  </div>-->
                  
                  <div class="col-xl-12">
                    <header class="post-title">
                      <h1><?php the_title();?></h1>
                      <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
                    </header>
                    
                      <?php the_content();?>
                      <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
                      <?php endwhile; // end of the loop. ?>
                  </div><!--/span7-->
                </div><!--/row-->
                
                <div class="row">
                  <div class="col-xl-12">
                    <?php bootstrapwp_content_nav('nav-below');?>
                    <?php get_template_part('/includes/newsletter_signup_rev'); ?>
                    <?php comments_template(); ?>
                  </div>
                </div>
                
              </div><!-- /.span8 -->
              <?php get_sidebar('blog'); ?>
            </div>
          </div>
        
      </div><!--/row-->  
      <?php get_footer(); ?>
    </div><!-- /container -->
  </body>
</html>