<?php
/**
 * Template Name: Guide Landing Page
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: Dev 7, 2019
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
              <div class="col-xl-12 who-we-are-intro">
                <?php while ( have_posts() ) : the_post(); ?>
                  <?php the_content();?>
                <?php endwhile; // end of the loop. ?>
              </div>
            </div>
          </div>
        </div>
            
        <div class="row"> 
          <div class="col-xl-8">
          <?php
            $pages = get_pages('child_of=7092&title_li=&sort_order=asc');
            $count = 0;
            foreach($pages as $page)
          {
            $content = $page->post_content;
            $guide_photo = get_field('member_photo', $page->ID);
            $guide_name = get_field('member_name', $page->ID);
            $guide_title = get_field('member_title', $page->ID);
            $guide_favorite = get_field('favorite_swiss_alp_trail_run', $page->ID);
          ?>
               
                <div class="founders-about">
                  <div class="row founder-bio">
                    <div class="col-xl-3">
                      <img class="founder-photo" src="<?php echo $guide_photo ?>"/>
                    </div>
                    <div class="col-xl-9">  
                      <div class="founder-title">
                        <h2><a href="<?php echo get_page_link($page->ID) ?>" class="link-btn text-dark"><?php echo $guide_name ?></a></h2>
                        <p><small><?php echo $guide_title ?></small></p>
                      </div>
                      <div class="bio-profile">
                        <p><strong class="section-title">Favorite Alp trail run</strong><?php echo $guide_favorite ?></p>
                      </div>
                      <a href="<?php echo get_page_link($page->ID) ?>" class="red-btn tour-more-info">Learn more<i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div> 
               
          <?php
          }
          ?> 
          </div>
          
          
          <div class="col-xl-4">
            <?php get_template_part('/includes/newsletter_signup_rev'); ?>
          </div>
	      
        </div><!--row-->
          
      </div><!-- /.span12 -->
      
      
      </div><!--/row-->  
      <?php get_footer(); ?>
    </div><!-- /container -->
  </body>
</html>