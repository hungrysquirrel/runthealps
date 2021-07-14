<?php
/**
 * Template Name: Shop
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
          <?php
          $children = get_children( array( 'post_parent' => get_the_ID(3359) ) );
          if ( $children ) {
              foreach( $children as $child ) { ?>
                  <div class="col-lg-4">
                    <div class="card" style="margin-bottom: 30px;">
                      <a href="<?php echo get_permalink($child->ID); ?>">
                        <?php 
                          $images = get_field('product_gallery', $child->ID); // get gallery
                          $image  = $images[0]; // get first image in the gallery [1] for second, [2] for third, and so on.
                        
                          if( $image ) : // only show the image if it exists ?> 
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid card-img-top" />
                        <?php endif; ?>
                      </a>
                      <div class="card-body">
                        <h4><a href="<?php echo get_permalink($child->ID); ?>"><?php echo get_the_title($child->ID); ?></a></h4>
                        <p>$<?php the_field( 'product_price', $child->ID ); ?></p>
                      </div>
                    </div>
                  </div>
          <?php } } ?>
      </div>
          
    </div><!-- /.span12 -->
    
  </div><!--/row-->  
  <?php get_footer(); ?>
</div><!-- /container -->

</body>
</html>