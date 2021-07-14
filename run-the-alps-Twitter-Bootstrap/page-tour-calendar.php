<?php
/**
 * Template Name: Tour Calendar
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
      <div class="col-xl-12 blog-post-top-rule">
        <div class="row">    
          <div class="col-xl-12 tour-entry"> 
            <h1 class="text-center"><?php the_title();?></h1>
            <div class="mb-5 text-center"><?php the_content();?></div>
            <div class="row">
              <div class="col-xl-12 table-responsive-md mb-4">
              <?php if(have_rows('tour_month')): ?>
                <?php while(have_rows('tour_month')): the_row(); ?>
                  <h4><?php the_sub_field('month'); ?></h4>
                  
                  <?php if(have_rows('tours')): ?>
                    <table class="table table-sm mb-5" style="list-style: none; padding: 0 16px;">
                      <thead>
                      	<tr>
                        	<th class="text-muted small" style="border-top: transparent; font-weight: bold;">Name</th>
                        	<th class="text-muted small" style="border-top: transparent; font-weight: bold;">Date</th>
                        	<th class="text-muted small" style="border-top: transparent; font-weight: bold;">
                          	Challenge level
                          	<a tabindex="0" role="button" class="btn btn-link btn-sm p-0 text-secondary" data-trigger="focus" data-toggle="popover" title="Challenge level" data-content="Learn more about Run the Alps Trip Rating System <a target='_blank' href='/run-the-alps-trip-rating-system/'>here</a>"><i class="fas fa-info-circle fa-xs"></i></a>
<!--
                          	<a href="/run-the-alps-trip-rating-system/" class="text-secondary">
                            	<i class="fas fa-info-circle fa-xs"></i>
                          	</a>
-->
                          </th>
                          <th class="text-muted small" style="border-top: transparent; font-weight: bold;">Remaining spots</th>
                          <th class="text-muted small" style="border-top: transparent; font-weight: bold;">&nbsp;</th>
                      	</tr>
                      </thead>
                    <tbody>
                    <?php while(have_rows('tours')): the_row(); ?> 
                      <tr>
                        <td width="35%">
                          <?php
                            $tour = get_sub_field('tour_name');
                            $permalink = get_permalink( $tour->ID );
                            if( $tour ): ?>
                              <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $tour->post_title ); ?></a>
                          <?php endif; ?>
                        </td>
                        <td width="25%">
                          <?php the_sub_field('tour_date'); ?>
                        </td>
                        <td width="15%">
                          <div class="challenge-range">
                            
                            <?php 
                              $values = get_sub_field('tour_challenge_level');
                              foreach ($values as $value) {
                            ?>
                            <i class="fas <?php echo $value ?>"></i><span class="dash">&ndash;</span>
                            <?php } ?>
                          </div>
                        </td>
                        <td width="15%">
                          <?php the_sub_field('remaining_spots'); ?>
                        </td>
                        <td width="10%">
                          <?php
                            $permalink = get_permalink( $tour->ID );
                            if( $tour ): ?>
                              <a href="<?php echo esc_url( $permalink ); ?>">Learn more</a>
                          <?php endif; ?>
                        </td>
                      </tr>
                      
                    <?php endwhile; ?>
                    </tbody>
                    </table>
                  <?php endif; ?>
                <?php endwhile; ?>
              <?php endif; ?>
              </div><!-- /end responsive table -->
            </div>
				<hr class="mt-0 mb-3" />
				<!--- Upcoming year -->
				<div class="row">
              <div class="col-xl-12 table-responsive-md mb-4">
              <?php if(have_rows('tour_month_upcoming_year')): ?>
                <?php while(have_rows('tour_month_upcoming_year')): the_row(); ?>
                  <h4><?php the_sub_field('month_upcoming_year'); ?></h4>
                  
                  <?php if(have_rows('tours_upcoming_year')): ?>
                    <table class="table table-sm mb-5" style="list-style: none; padding: 0 16px;">
                      <thead>
                      	<tr>
                        	<th class="text-muted small" style="border-top: transparent; font-weight: bold;">Name</th>
                        	<th class="text-muted small" style="border-top: transparent; font-weight: bold;">Date</th>
                        	<th class="text-muted small" style="border-top: transparent; font-weight: bold;">
                          	Challenge level
                          	<a tabindex="0" role="button" class="btn btn-link btn-sm p-0 text-secondary" data-trigger="focus" data-toggle="popover" title="Challenge level" data-content="Learn more about Run the Alps Trip Rating System <a target='_blank' href='/run-the-alps-trip-rating-system/'>here</a>"><i class="fas fa-info-circle fa-xs"></i></a>
<!--
                          	<a href="/run-the-alps-trip-rating-system/" class="text-secondary">
                            	<i class="fas fa-info-circle fa-xs"></i>
                          	</a>
-->
                          </th>
                          <th class="text-muted small" style="border-top: transparent; font-weight: bold;">Remaining spots</th>
                          <th class="text-muted small" style="border-top: transparent; font-weight: bold;">&nbsp;</th>
                      	</tr>
                      </thead>
                    <tbody>
                    <?php while(have_rows('tours_upcoming_year')): the_row(); ?> 
                      <tr>
                        <td width="35%">
                          <?php
                            $tour = get_sub_field('tour_name');
                            $permalink = get_permalink( $tour->ID );
                            if( $tour ): ?>
                              <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $tour->post_title ); ?></a>
                          <?php endif; ?>
                        </td>
                        <td width="25%">
                          <?php the_sub_field('tour_date'); ?>
                        </td>
                        <td width="15%">
                          <div class="challenge-range">
                            
                            <?php 
                              $values = get_sub_field('tour_challenge_level');
                              foreach ($values as $value) {
                            ?>
                            <i class="fas <?php echo $value ?>"></i><span class="dash">&ndash;</span>
                            <?php } ?>
                          </div>
                        </td>
                        <td width="15%">
                          <?php the_sub_field('remaining_spots'); ?>
                        </td>
                        <td width="10%">
                          <?php
                            $permalink = get_permalink( $tour->ID );
                            if( $tour ): ?>
                              <a href="<?php echo esc_url( $permalink ); ?>">Learn more</a>
                          <?php endif; ?>
                        </td>
                      </tr>
                      
                    <?php endwhile; ?>
                    </tbody>
                    </table>
                  <?php endif; ?>
                <?php endwhile; ?>
              <?php endif; ?>
              </div><!-- /end responsive table -->
            </div>

            <div class="mb-5 text-center"><?php the_field('below_calendar_text_block') ?></div>
          </div><!-- /.span12 -->
        </div><!--/row-->  
      <?php get_footer(); ?>
    </div><!-- /container -->
  </body>
</html>