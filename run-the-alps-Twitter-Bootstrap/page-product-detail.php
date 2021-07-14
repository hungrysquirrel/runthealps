<?php
/**
 * Template Name: Product detail
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
      <div class="col-xl-12 margin-top-20">
        <p><a href="/shop" class="btn btn-link"><i class="fa fa-angle-left"></i> Back to Shop</a></p>
      </div>
    </div>

    <div class="row"> 
      <div class="col-xl-12">
            
        <div class="row">
          <div class="col-md-6">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                  <?php 

                    $images = get_field('product_gallery');
                    
                    if( $images ): ?>
                                <?php foreach( $images as $image ): ?>
                                    <div class="carousel-item">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid" />
                                    </div>
                                <?php endforeach; ?>
                  <?php endif; ?>
              </div>  

              <a class="carousel-control left" href="#product-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
              <a class="carousel-control right" href="#product-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-md-6">
            <h1><?php the_title();?></h1>
            <p class="lead margin-bottom-0"><b>$<?php the_field('product_price'); ?></b></p>
            <p class="text-muted small">$<?php the_field('product_shipping_rate'); ?> S/H</p>
            <div class="margin-bottom-20"><?php the_field('buy_button'); ?></div>
            <?php the_field('product_description'); ?>
            
            <?php if(get_field('product_specs')): ?>                    
            	<p class="margin-bottom-0"><b>Specs</b></p>
							<small class="text-muted"><?php the_field('product_specs'); ?></small>
            <?php endif; ?>
            
            
          </div>
        </div>
        
          
      </div><!-- /.span12 -->
      
    </div><!--/row--> 
    <?php get_footer(); ?> 
  </div><!-- /container -->

</body>
</html>
