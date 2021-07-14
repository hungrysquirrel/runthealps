<?php
/**
 * Template Name: Archives
 * Template Post Type: guide_network
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: Nov 1, 2020
 */

get_header();
if (have_posts() ) ;?>

<div class="container">

  <div class="col-xl-12 blog-post-top-rule">
  	<header class="overview">
  		<h1>Guide Network</h1>
  	</h1>
  </header>
  </div>
  
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
  	  	
  	  	<div class="col-xl-12">
          <?php bootstrapwp_content_nav('nav-below');?>
        </div>
        
      </div><!-- /.span8 -->
      <?php
      $categories = get_categories("taxonomy=regions"); 
$separator = ' ';
$output = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
    echo trim( $output, $separator );
}
?>
    </div><!--/row-->
  </div><!--/span12-->
  
  <div class="col-xl-12">
    <div class="row">
      <?php get_footer(); ?>
    </div>
  </div>

</div>