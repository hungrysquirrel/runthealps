<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
?>
<div class="col-xl-4">
  <div class="sidebar-nav">
    <?php get_template_part('/includes/newsletter_signup_rev'); ?>
    <?php if ( function_exists('dynamic_sidebar')) dynamic_sidebar("sidebar-posts"); ?>
    
    <p>
      <div class="fb-page" data-href="https://www.facebook.com/runalps" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/runalps"><a href="https://www.facebook.com/runalps">Run The Alps</a></blockquote></div></div>
    </p>
	</div><!--/ .sidebar-nav -->
</div><!-- /.span4 -->

