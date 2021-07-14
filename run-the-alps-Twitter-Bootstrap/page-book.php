<?php
/**
 * Template Name: Book
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
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-xl-12 mt-0">
            
        <div class="row"> 
          <div class="col-xl-12">
            
            <div class="row book-hero">
              <div class="col-md-12">
                <div class="row align-items-center">
                  <div class="col-md-4 offset-md-3"><h1 class="mb-3">
                    <?php the_title();?></h1>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <div class="notify-me-button">
                          <div id='product-component-68549d4cfdb'></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-inline">
	                    <li class="list-inline-item">
                        <b><?php the_field('book_price'); ?></b>
                      </li>
                      <li class="list-inline-item text-secondary">
                        <?php the_field('book_shipping_and_handling'); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3 col-sm-6 text-center"><img src="<?php the_field('hero_image'); ?>" class="img-fluid my-4" /></div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="lead normal-weight-lead mt-4">
                  <?php the_field('intro_text'); ?>
                </div>
              </div>
            </div> 
              
            <div class="row">
              <div class="col-md-12">
                <div id="product-carousel" class="carousel large-carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <?php 
                      $images = get_field('book_gallery');
                      
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
            </div>

            <div class="row">
              <div class="col-md-6 offset-md-3">
                <?php the_field('body_text'); ?>
              </div>
            </div> 

            <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
              </div>
            </div> 

              
          </div>
        </div>
          
      </div><!-- /.span12 -->
      <?php get_footer(); ?>
      </div><!--/row-->  
    </div><!-- /container -->
    <script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
    
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pre-Order: Notify me when in stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>The book is expected to start shipping shortly after May 10, 2018 for
          <b><?php the_field('book_price'); ?></b> 
          and <?php the_field('book_shipping_and_handling'); ?>.
        </p>
        <?php echo do_shortcode( '[si-contact-form form="7"]' ); ?>
      </div>
    </div>
  </div>
</div>

  </body>
  <script type="text/javascript">
/*<![CDATA[*/

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'run-the-alps.myshopify.com',
      apiKey: 'f813b5017a161df59a24fef09c9114fa',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [754979307622],
        node: document.getElementById('product-component-68549d4cfdb'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "variantId": "all",
    "width": "240px",
    "contents": {
      "img": false,
      "imgWithCarousel": false,
      "title": false,
      "variantTitle": false,
      "price": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "text-align": "left",
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0",
          "margin-bottom": "50px"
        }
      },
      "compareAt": {
        "font-size": "12px"
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "styles": {
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
  }
})();
/*]]>*/
</script> 
</html>