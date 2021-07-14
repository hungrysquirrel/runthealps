<?php
/**
 * Template Name: News Letter Signup
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
    
      
      <div class="banner-image about">
        <img src="<?php the_field('about_top_image_banner'); ?>" />
        <div class="photographer-credit">
          <small>&copy;<?php the_field('about_image_photo_credit'); ?></small>
        </div>
      </div> 
          
      <div class="container sbs-content-wrapper">
        <div class="row">
            
          <div class="col-xl-12">
            <div class="row">
              <div class="col-xl-12 about-body-copy"> 
                <header class="page-title overview no-underline">
                  <h1><?php the_title();?></h1>
                </header>
                <?php while ( have_posts() ) : the_post(); ?>
                  <?php the_content();?>
                <?php endwhile; // end of the loop. ?>
              </div>
            </div>
          </div>
          
          <div class="col-xl-8">
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
              <form action="http://runthealps.us4.list-manage.com/subscribe/post?u=78f317c106f0e913583f17c21&amp;id=2f803eb66b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate clearfix card" target="_blank" novalidate>
                <div class="card-body">
	                <h5 class="card-title">Laces Newsletter Sign up</h5>
                	<div class="form-group col-xs-12 col-xl-12">
                		<div class="input-group">
                	  	<input type="email" value="" name="EMAIL" class="override form-control" id="mce-EMAIL" placeholder="email address" required>
											<span class="input-group-btn"><input type="submit" value="Signup" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary"></span>
                		</div>
						 <div class="mc-field-group input-group" style="display: none;">
    <ul>
    <li><input type="checkbox" value="128" name="group[18661][128]" id="mce-group[18661]-18661-7" checked=""><label for="mce-group[18661]-18661-7">Run the Alps Blog Updates</label></li>
</ul>
</div>
                	</div>
                </div>
              </form>
            </div> 
						<!--End mc_embed_signup-->
          </div>
          
          <div class="fb-page col-xl-4" data-href="https://www.facebook.com/runalps" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
	          <div class="fb-xfbml-parse-ignore">
		          <blockquote cite="https://www.facebook.com/runalps">
			          <a href="https://www.facebook.com/runalps">Run The Alps</a>
			        </blockquote>
			      </div>
			    </div>
           
           <?php get_footer(); ?>
        </div><!--/row-->  
      </div><!-- /container -->
    </body>
  </html>