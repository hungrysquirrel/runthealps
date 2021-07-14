<!-- <div class="col-xl-12"> -->
  <div class="row">
    <!-- End Template Content -->
    <footer class="col-xl-12">
      <div class="footer-copy clearfix">
        <div class="row">
          <div class="col-xl-6">
            <div class="fb-like" data-href="https://www.facebook.com/pages/Run-The-Alps/470683506319586" data-send="false" data-width="300" data-show-faces="true"></div>
          </div>
          <div class="col-xl-6 text-right">
            <a href="/run-the-alps-privacy-policy/"><small>Privacy policy</small></a>
            <small>&nbsp; &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?> RUN THE ALPS is a registered trademark of Run the Alps LLC</small>
          </div>
        </div>
      </div>
        <?php
          if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-content");
        ?>
    </footer>
  </div>
  
  <?php wp_footer(); ?>
<!-- </div> -->
<?php
  if ( function_exists( 'yoast_analytics' ) ) {
    yoast_analytics();
  }
?>