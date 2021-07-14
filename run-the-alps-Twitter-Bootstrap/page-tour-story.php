<?php
/**
 * Template Name: Tour Story
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
          <!--<div class="col-xl-3">
             <div class="sidebar-nav tours">
               
               <?php
	               $pages = get_pages( array(
		    	         'sort_order' => 'ASC',
		    	         'sort_column' => 'post_title',
		    	         'parent' => 525 )
				         );
	             ?>

	             <?php
	             	if ($post->post_parent)
	             		//I am a subpage
	             		$id = $post->post_parent;
	             	else
	             		//I am a page
	             		$id = $post->ID;
	             	  $subpages = get_pages(array("child_of"=>$id));
	             ?>
               
               		<ul>
               			<?php
               				foreach($subpages as $subpage):
               			?>
               			<li <?php if ($subpage->ID == $post->ID) echo 'class="current-page-item"'?>>
               				<a href="<?php echo get_permalink($subpage->ID); ?> "><?php echo $subpage->post_title ?></a>
               			</li>
               			<?php endforeach; ?>
               
               </ul>
             </div>
           </div>-->
           
<!--
                             <div class="media mb-4">
                    <span class="d-flex align-self-center mr-3">
                      <?php userphoto_thumbnail($posts[0]->post_author); ?>
                    </span>
                    <div class="media-body">
                      <p class="my-0">
                        <?php the_field('tour_dates'); ?></p>
                        <?php while ( have_posts() ) : the_post(); ?>                      
                          Tour Story By <?php the_author(); ?>
                        <?php endwhile; // end of the loop. ?>
                    </div>
                  </div>
-->
           
           <div class="col-xl-8 offset-xl-2">
              <div class="row">
                <div class="col-xl-12">
                  <img src="<?php the_field('hero_image'); ?>" class="img-fluid my-4" />
                  <h5 class="text-uppercase text-muted small"><strong>Tour stories</strong></h5>
                  <h1 class="mb-3"><?php the_title();?></h1>
                  
                  <p class="mb-0"><?php the_field('tour_dates'); ?></p>
                  <p>
                    <?php while ( have_posts() ) : the_post(); ?>                      
                      Tour Story By <?php the_author(); ?>
                    <?php endwhile; // end of the loop. ?>
                  </p>
                  
                  <div class="row">
                    <?php if(have_rows('tour_guide')): ?>
                      <div class="col-xl-12" style="padding-bottom: 20px;">
                        <div class="row">
                          <?php while(have_rows('tour_guide')): the_row(); ?>
                            <div class="col-xl-6">
                              <div class="media" style="align-items: center;">
                              <img src="<?php the_sub_field('guide_image'); ?>" class="img-fluid align-self-center mr-3 photo" /> 
                              <div class="media-body">
                                <p>Guided by <a href="/guides"><?php the_sub_field('guide_name'); ?></a></p>
                              </div>
                              </div>
                            </div>
                          <?php endwhile; ?>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                  
                  <span class="lead normal-weight-lead">
                    <p style="font-style: italic;"><?php the_field('intro_text'); ?></p>
                  </span>

                  <?php the_field('body_text'); ?>
                  
                </div>
              </div> 
              
              
              <?php if(get_field('trip_images')): ?>
                <?php while(has_sub_field('trip_images')): ?>
                  <div class="mb-4">
                    <img src="<?php the_sub_field('tour_image'); ?>" class="img-fluid text-center w-100 mb-2" />
                    <div class="small"><?php the_sub_field('tour_image_caption'); ?></div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
              
              
              <div class="card card-inverse mb-4 p-2" style="background-color: #f0f7ff;">
                <div class="card-block">
                  <h4 class="card-title">Share this Trip Story</h4>
                  <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_email"></a>
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                  </div>
                </div>
              </div>
              <?php get_template_part('/includes/newsletter_signup_rev'); ?>
              


              <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
              
           </div>
        </div>
          
      </div><!-- /.span12 -->
      
      </div><!--/row-->  
      <?php get_footer(); ?>
    </div><!-- /container -->
    <script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
  </body>
</html>