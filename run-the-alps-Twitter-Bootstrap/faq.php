<?php
/**
 * Template Name: FAQ
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
          
              </div>
            </div>
                
            <div class="row"> 
              <div class="col-xl-12">
                <div id="accordion" class="faq">
                  <!-- repeater	-->
          		      <?php              
                    if(get_field('faq_question_and_answer')): ?>
                    <?php $count = 0; ?>
                    <?php while(has_sub_field('faq_question_and_answer')): ?>
                      <hr/>
                      <div class="faq-qa panel panel-default">
                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapse<?php echo $count ?>">
                          <h4><i class="fa "></i> <?php the_sub_field('faq_question'); ?></h4>
                        </a>
                        <div id="collapse<?php echo $count ?>" class="panel-collapse collapse">
                          <?php the_sub_field('faq_answer'); ?>
                        </div> 
                      </div>
                      <?php ++$count ?>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  <!-- /repeater	-->
                </div><!--faq-->  
              </div>

              <!--<div class="col-xl-4">
                <ul class="thumbnails">
                  <?php if( have_rows('faq_supportive_images') ): ?>
                    <?php while( have_rows('faq_supportive_images') ): the_row(); ?>
                      <li class="col-xl-12">
                        <p><img src="<?php the_sub_field('image'); ?>" class="img-thumbnail img-fluid"/></p>
                      </li>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </ul>
              </div>
              -->
            </div>
            
              
          </div><!-- /.span12 -->
          
      </div><!--/row-->  
      <?php get_footer(); ?>
    </div><!-- /container -->
  </body>
</html>