<?php
/**
 * Template Name: Virtual Tour Marketing
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: September 27, 2020
 */
get_header(); ?>
<!-- Begin Template Content -->

  <div class="container-fluid">  
    <div class="row mt-4">
      
      <div class="col-lg-9">
        
        <div class="row">
          <div class="col-lg-12 m2-4">
            <div class="mb-4"><h1><?php the_title();?></h1></div>
          </div>
        </div>
         
        <div class="row">
          <div class="col-lg-12 mb-4">
            <img src="<?php the_field('hero_image'); ?>" style="width: 100%; height: 400px; object-fit: cover;" />
          </div>
        </div>
        

        
        
        <?php if (get_field('highlights')): ?>
          <div class="row">
            <div class="col-lg-12 my-4">
              <h3>Highlights</h3>
                <div class="virtual-tour-wysiwyg-style">
                  <?php the_field('highlights'); ?>
                </div>
            </div>
          </div>
        <?php endif; ?>
        
        
        <div class="row my-4">
          <div class="col-lg-12">
            <?php the_field('map'); ?>
          </div>
        </div>
        
        
        <?php if (get_field('description')): ?>
        <div class="row">
          <div class="col-lg-12 my-4">
            <div>
              <h3>Description</h3>
              <p><?php the_field('description'); ?></p>
            </div>
          </div>
        </div>
        <?php endif; ?>
        
        <div class="row">
          <div class="col-lg-12 my-4">
            <h3>Gallery</h3>
            <?php 
            $images = get_field('images');
            if( $images ): ?>
              <ul>
                <?php foreach( $images as $image ): ?>
                  <li>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" style="width: 100%; height: 500px; object-fit: cover;" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <p class="text-muted"><small><?php echo esc_html($image['caption']); ?></small></p>
                    <p class="text-center lead" style="font-family: 'Georgia'; padding: 40px 30%;"><?php echo esc_html($image['description']); ?></p>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12 my-2">
            <h3>Videos</h3>
            <?php while(has_sub_field('videos')): ?>
              <p><?php the_sub_field('video_title'); ?></p>
              <p><?php the_sub_field('video_summary'); ?></p>
              <div class="embed-responsive embed-responsive-16by9"><?php the_sub_field('video'); ?></div>
            <?php endwhile; ?>
          </div>
        </div>
        
        
      </div><!-- end col 10  -->
      
      
      <div class="col-lg-3">
        <div class="sticky-top card" style="top: 20px;">
          <div class="card-body">
            <h5 class="card-title">Sign up for this tour</h5>
            <ul>
              <li>8 days</li>
              <li>exclusive interviews </li>
              <li>world class guide</li>
              <li>run along at your own pace</li>
              <li>RTA gift</li>
              <li>10% discount when you book your next tour (virtual or in-person)</li>
            </ul>
            <button class="btn btn-primary">Sign up</button>
          </div>
        </div>
      </div>
      
      
    </div><!-- end row  -->  
    <?php get_footer(); ?>
  </body>
</html>