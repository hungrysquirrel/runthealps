<?php
/**
 * Template Name: Guide Network Region page
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
      <div class="col-xl-12 blog-post-top-rule">
      
        <div class="row">
          <div class="col-xl-12">
           
            <header class="page-title overview overview-without-border">
              <h1><?php the_title();?></h1>
            </header>
            
            <div class="row">
              <div class="col-xl-10 intro">
                Guide network regions
                
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content();?>
                  <?php endwhile; // end of the loop. ?>
                
              </div>
            </div>
          </div>
        </div>
            
        <div class="row">
          <div class="col-xl-12">
          
            <?php
              $childArgs = array(
                'sort_order' => 'ASC',
                'sort_column' => 'menu_order',
                'child_of' => get_the_ID()
              );
              
              $childList = get_pages($childArgs);
              
              foreach ($childList as $child) { ?>
              <!-- Generates all class names you would expect from a normal page. Example: page, post-{id} etc. -->
              <section <?php post_class($child->post_name); ?>>
            
                <a href="<?php echo get_page_link($child->ID) ?>"><?php echo $child->post_title; ?></a>
                
                
                <?php echo apply_filters( 'the_content', $child->post_content); ?>
            
              </section>  
            
            <?php } ?>   
          </div>       
        
        </div>
        
          
      </div><!-- /.span12 -->
      
      </div><!--/row-->  
      <?php get_footer(); ?>
    </div><!-- /container -->
  </body>
</html>