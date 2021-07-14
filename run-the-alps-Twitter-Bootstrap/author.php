<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php
	/* Queue the first post, that way we know
	 * what author we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	the_post();
	?>
  <div class="container">
    <div class="col-xl-12 blog-post-top-rule">
  		<header class="overview">
  			<h1 class="page-title author"><?php printf( __( 'Author Archives: %s', 'bootstrapwp' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
  		</header>
    </div>
  		<?php
  					/* Since we called the_post() above, we need to
  					 * rewind the loop back to the beginning that way
  					 * we can run the loop properly, in full.
  					 */
  		  rewind_posts();
  		?>
  		
  		<div class="col-xl-12">
      <div class="row">
  	    <div class="col-xl-8">
  	    	<?php while ( have_posts() ) : the_post(); ?>
              <div class="row short-blog-entry">
                <!--<div class="col-xl-1 author-photo">
                  <?php userphoto_the_author_photo() ?>
                </div>
                -->
                <div class="col-xl-12 short-blog-excerpt">
                  <header class="post-title">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
                    <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
                  </header>
                  <?php the_excerpt();?>
                </div>
              </div>
  	    	<?php endwhile; ?>
  	    	<?php endif; ?>
  	    	
  	    	<div class="col-xl-12">
            <?php bootstrapwp_content_nav('nav-below');?>
          </div>
          
        </div><!-- /.span8 -->
        <?php get_sidebar('blog'); ?>
      </div><!--/row-->
    </div><!--/span12-->
      
    <div class="col-xl-12">
      <div class="row">
        <?php get_footer(); ?>
      </div>
    </div>
</div>
	  				