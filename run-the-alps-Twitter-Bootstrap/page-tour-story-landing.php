<?php
/**
 * Template Name: Tour Stories
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
      <div class="col-xl-12 mt-0">
            
        <div class="row"> 
          <div class="col-xl-8 offset-xl-2 mt-4">
            <div class="row">
              <div class="col-xl-12">
                <header class="page-title overview no-underline">
                   <h1><?php the_title();?></h1>
                 </header>

                <?php while ( have_posts() ) : the_post(); ?>
                  <div class="row">
                    <div class="col-xl-12 intro">
                      <?php the_content();?>
                    </div>
                  </div>
                <?php endwhile; // end of the loop. ?>
              </div>
              <div class="col-xl-12">
                <?php
                  $children = get_children( array( 'post_parent' => get_the_ID(4588) ) );
                  if ( $children ) {
                    ?>
                    <?php
                    foreach( $children as $i => $child ) {
                      $country = get_field('race_country', $child->ID); ?>
                      <hr class="mt-4"/>
                      <a href="<?php echo get_permalink($child->ID); ?>" title="Click here to read the Tour Story for <?php echo get_the_title($child->ID); ?>"><img src="<?php the_field('hero_image', $child->ID); ?>" alt="<?php echo get_the_title($child->ID); ?>" class="img-fluid my-3" /></a>
                      <h2><a href="<?php echo get_permalink($child->ID); ?>"><?php echo get_the_title($child->ID); ?></a></h2>
                      <p class="my-0"><?php the_field('tour_dates', $child->ID); ?></p>
                      <p><?php the_field('intro_text', $child->ID); ?></p>
                      <p><a href="<?php echo get_permalink($child->ID); ?>">continue reading&hellip;</a></p>
                    <?php } ?>
                  <?php
                  }
                ?>
              </div>
            </div> 
          </div>
        </div>
          
      </div><!-- /.span12 -->
      
      </div><!--/row-->  
      <?php get_footer(); ?>
    </div><!-- /container -->
    <script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
  </body>
</html>

          