<?php
/**
 * Template Name: Stories
 * Description: Page template to display blog posts
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
get_header(); ?>
<!-- Begin Template Content -->
    <div class="container sbs-content-wrapper">
      <div class="row"> 
      
        <div class="span12 blog-post-top-rule">
          <div class="row">
            <div class="span8">
              <div class="row">
                <?php
                          // Blog post query
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts( array( 'post_type' => 'post', 'paged'=>$paged, 'showposts'=>0) );
                if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                  <div class="span8">
                    <div class="row short-blog-entry">
                      <!--<div class="span1 author-photo">
                        <?php userphoto_the_author_photo() ?>
                      </div>-->
                      <div class="span7 short-blog-excerpt">
                        <header class="post-title">
                          <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
                          <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
                        </header>
                        <?php the_excerpt();?>
                      </div>
                    </div>
                  </div><!-- /.span8 -->
                <?php endwhile; endif; ?>
                <div class="span7 offset1">
                  <?php bootstrapwp_content_nav('nav-below');?>
                </div>
              </div>
            </div>
                           
            
        
          </div>
        </div>
      
        <?php get_footer(); ?>
      </div><!--/row-->  
      <?php get_sidebar('blog'); ?>
    </div><!-- /container -->
  </body>
</html>

    
    
    
