jQuery(document).ready(function ($) {
  $('.carousel').carousel({
    pause: "hover"
  });

  $('#myCarousel').find('.carousel-item').first().addClass('active');
  $('#product-carousel').find('.carousel-item').first().addClass('active');
  
  $('.tooltip-info').tooltip({
    placement: 'right'
  });

  $('#menu-main-navigation > li').addClass('nav-item');
  $('#menu-main-navigation > li > a:first-child').addClass('nav-link');
  $('#menu-item-2342, #menu-item-47, #menu-item-35').addClass('dropdown');
  $('#menu-item-2342 > a, #menu-item-47 > a, #menu-item-35 > a').addClass('dropdown-toggle').attr('data-toggle', 'dropdown');
  $('.dropdown-menu > li').addClass('dropdown-item');

  $('body.single-post #menu-item-2708, body.archive #menu-item-2708').addClass('current-menu-item');

  $('#accordion').find('.panel-collapse').first().addClass('show');
  $('#accordion').find('.panel a').first().removeClass('collapsed');
  
//   $('[data-toggle="popover"]').popover();
  
  $("[data-toggle=popover]").popover({
        html : true,
        trigger: 'focus',
        content: function() {
            var content = $(this).attr("data-popover-content");
            return $(content).children(".popover-body").html();
        }
    });
    
/* For Virtual tours
    
  $('.swpm_full_page_protection_not_logged_msg').html(function (i, t) {
    return t.replace('Not a Member?', '');
  })

  $('.swpm_full_page_protection_not_logged_msg').html(function (i, t) {
    return t.replace('Join Us', '');
  })

  $('.swpm_full_page_protection_not_logged_msg').wrap("<div class='sign-in'></div>");
*/

});
