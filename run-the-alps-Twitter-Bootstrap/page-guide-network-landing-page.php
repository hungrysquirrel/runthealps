<?php
/**
 * Template Name: Guide Network Landing Page
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: Nov 1, 2020
 */
get_header(); ?>
<!-- Begin Template Content -->
    <div class="container sbs-content-wrapper mt-4">
        <div class="row mb-4">
          <div class="col-xl-12">
            <div class="row">  
              <div class="col-xl-12">
                <header class="page-title overview overview-without-border">
                  <h1><?php the_title();?></h1>
                </header>
              </div>
              
              <div class="col-xl-12">
                <?php while ( have_posts() ) : the_post(); ?>
                  <?php the_content();?>
                <?php endwhile; // end of the loop. ?>
              </div>
            </div><!--/row-->
          </div><!--/span12-->
          
          <div class="col-xl-12">
            <div class="row">
              <div class="col-xl-12 mb-4"><img src="<?php the_field('guide_regions_map'); ?>" class="img-fluid" /></div>
            </div>
          </div>
              
              <div class="col-xl-12">
                   <!--<h3>Regions</h3> -->
                    <div class="row">
                        <?php 
                        
                        $args = array(
                          'post_type' => 'page',
                          'post_status' => 'publish',
                          'posts_per_page' => -1,
                          'order' => 'DESC',
                          'orderby' => 'meta_value',
                          'meta_query' => array(
                        
                          array(
                            'key' => 'guide_regions_of_availability',
                            'value' => '',
                            'compare' => '!=',
                            ),
                          ),
                        );
                        
                        $qr = new WP_Query( $args ); 
                        $posts = $qr->get_posts();              
                        $pages = array();
                        $page_regions = array();
                        foreach ($posts as $post) {
                          $id = $post->ID;
                          $post_regions = get_field('guide_regions_of_availability', $id);
                          $certification = get_field('certification', $id);
                          
                          foreach ($post_regions as $region) {
                            $page = array(
                              'permalink' => get_permalink($id),
                              'title' => $post->post_title,
                              'region' => $region,
                              'certification' => get_field('certification', $id),
                              'photo' => get_field('guide_photo', $id),
                              'yearsGuiding' => get_field('years_guiding', $id),
                              'guideHometown' => get_field('guide_hometown', $id),
                            );
                            if (!array_key_exists($region, $pages)) {
                              $pages[$region] = array();
                            }
                            array_push($pages[$region], $page);
                            array_push($page_regions, $region);
                          }
                        }
                      
                        $page_regions = array_unique($page_regions);
                        sort($page_regions);
                  
                        foreach ($page_regions as $region) { ?>
                          <div class="col-xl-12 table-responsive-md mb-4">
                          <h4 class="mb-2">
                            <?php print $region; ?>
                            <button type="button" class="btn btn-sm btn-link" data-toggle="modal" data-target="#exampleModal">
                              <i class="far fa-map"></i> Map
                            </button>
                          </h4>
                          <table class="table table-sm" style="list-style: none; padding: 0 16px;">
                          	<thead>
                            	<tr>
                              	<th class="text-muted small" style="border-top: transparent; font-weight: bold;">Name</th>
                              	<th class="text-muted small" style="border-top: transparent; font-weight: bold;">Hometown</th>
                              	<th class="text-muted small" style="border-top: transparent; font-weight: bold;">Years Guiding</th>
                                <th class="text-muted small" style="border-top: transparent; font-weight: bold;">Certification</th>
                            	</tr>
                          	</thead>
                          	<tbody>
                            <?php foreach ($pages[$region] as $page) { ?>
                            <tr>
                              <td width="25%">
                                <a href="<?php print $page['permalink']; ?>">
                                  <img class="rounded-circle" width="30px" height="30px" src="<?php print $page['photo'] ?>" />
                                  <?php print $page['title'] ?>
                                </a>
                              </td>
                              <td width="25%">
                                <?php print $page['guideHometown'] ?>
                              </td>
                              <td width="25%">
                                <?php print $page['yearsGuiding'] ?>
                              </td>
                              <td width="25%">
                                <span class="zero-out"><?php print $page['certification'] ?></span>
                              </td>
                            </tr>
                          <?php } ?>
                          	</tbody>
                          </table>
                          </div>
                        <?php
                        }
                        ?>
                        
                        <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>     
                    </div>     
              </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Guide regions map</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="<?php the_field('guide_regions_map'); ?>" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>

        
        <div class="row">
          <div class="col-xl-12">
            <?php get_footer(); ?>
          </div>
        </div><!--/row-->  
    
    
    </div><!-- /container -->
  </body>
</html>
