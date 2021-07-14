<?php
/**
 *
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<!-- Begin Template Content -->
    <div class="container sbs-content-wrapper">
      <div class="row"> 
      
        <div class="col-xl-12 blog-post-top-rule">
          <div class="row">
            <div class="col-xl-8">
              <div class="row">
                <?php
                          // Blog post query
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts( array( 'post_type' => 'post', 'paged'=>$paged, 'showposts'=>0) );
                if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                  <div class="col-xl-12">
                    <div class="row short-blog-entry">
                      <!--<div class="span1 author-photo">
                        <?php userphoto_the_author_photo() ?>
                      </div>-->
                      <div class="col-xl-12 short-blog-excerpt">
                        <header class="post-title">
                          <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
                          <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
                        </header>
                        <?php the_excerpt();?>
                      </div>
                    </div>
                  </div><!-- /.col-xl-8 -->
                <?php endwhile; endif; ?>
                <div class="col-xl-12">
                  <?php bootstrapwp_content_nav('nav-below');?>
                </div>
              </div>
            </div>
                           
            <?php get_sidebar('blog'); ?>
        
          </div>
        </div>
      
        
      </div><!--/row-->  
      <?php get_footer(); ?>
    </div><!-- /container -->
  </body>
</html>