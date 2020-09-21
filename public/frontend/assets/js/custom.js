

$(document).ready(function(){
  // $('.nav_link_toggle').hover(function(){
  //   $('.has_mega_menu').addClass('hs_mega_menu_opened');
    
  // });

  $('.nav_link_toggle').hover(function(){
      // $('.has_mega_menu').addClass('hs_mega_menu_opened');
      }, function(){
      // $('.has_mega_menu').removeClass('hs_mega_menu_opened');
  });

  $('ul li.li_nav_1').hover(function() {
      $(this).find('.dropdown-menu.dropdown-menu-1').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).find('.dropdown-menu.dropdown-menu-1').stop(true, true).delay(200).fadeOut(500);
  });


  (function ($, window, undefined) {

      var $allDropdowns = $();


      $.fn.dropdownHover = function (options) {
  
          if('ontouchstart' in document) return this; 

          $allDropdowns = $allDropdowns.add(this.parent());

          return this.each(function () {
              var $this = $(this),
                  $parent = $this.parent(),
                  $dropmenu = $parent.find('.dropdown-menu.dropdown-menu-1'),
                  defaults = {
                      delay: 500,
                      hoverDelay: 0,
                      instantlyCloseOthers: true
                  },
                  data = {
                      delay: $(this).data('delay'),
                      hoverDelay: $(this).data('hover-delay'),
                      instantlyCloseOthers: $(this).data('close-others')
                  },
                  showEvent   = 'show.bs.dropdown',
                  hideEvent   = 'hide.bs.dropdown',
                  
                  settings = $.extend(true, {}, defaults, options, data),
                  timeout, timeoutHover;

              $parent.hover(function (event) {
                 
                  if(!$parent.hasClass('show') && !$this.is(event.target)) {
                      
                      return true;
                  }

                  openDropdown(event);
              }, function () {
                  // clear timer for hover event
                  window.clearTimeout(timeoutHover)
                  timeout = window.setTimeout(function () {
                      $this.attr('aria-expanded', 'false');
                      $parent.removeClass('show');
                      $dropmenu.removeClass('show');
                      $this.trigger(hideEvent);
                  }, settings.delay);
              });

              // this helps with button groups!
              $this.hover(function (event) {
              
                  if(!$parent.hasClass('show') && !$parent.is(event.target)) {
                  
                      return true;
                  }

                  openDropdown(event);
              });

              // handle submenus
              $parent.find('.dropdown-submenu').each(function (){
                  var $this = $(this);
                  var subTimeout;
                  $this.hover(function () {
                      window.clearTimeout(subTimeout);
                      $this.children('.dropdown-menu.dropdown-menu-1').show();
                      // always close submenu siblings instantly
                      $this.siblings().children('.dropdown-menu').hide();
                  }, function () {
                      var $submenu = $this.children('.dropdown-menu.dropdown-menu-1');
                      subTimeout = window.setTimeout(function () {
                          $submenu.hide();
                      }, settings.delay);
                  });
              });

              function openDropdown(event) {
                  if($this.parents(".navbar").find(".navbar-toggle").is(":visible")) {
                      return;
                  }

                  window.clearTimeout(timeout);
                  // restart hover timer
                  window.clearTimeout(timeoutHover);
                  
                  // delay for hover event.  
                  timeoutHover = window.setTimeout(function () {
                      $allDropdowns.find(':focus').blur();

                      if(settings.instantlyCloseOthers === true)
                          $allDropdowns.removeClass('show');
                      
                      // clear timer for hover event
                      window.clearTimeout(timeoutHover);
                      $this.attr('aria-expanded', 'true');
                      $parent.addClass('show');
                      $dropmenu.addClass('show');
                      $this.trigger(showEvent);
                  }, settings.hoverDelay);
              }
          });
      };

      $(document).ready(function () {
          // apply dropdownHover to all elements with the data-hover="dropdown" attribute
          $('[data-hover="dropdown"]').dropdownHover();
      });
  })(jQuery, window);

  // $('.cart_toggle').click(function(event){
  //     event.stopPropagation();
  //      $(".cart_content_head").slideToggle("fast");
  // });
  // $(".cart_content_head").on("click", function (event) {
  //     event.stopPropagation();
  // });

  // $(document).on("click", function () {
  //     $(".cart_content_head").hide();
  // });

  $('.menu_1_btn').click(function(event){
      event.stopPropagation();
       $(".menu_1").slideToggle("fast");
  });
  $(".menu_1").on("click", function (event) {
      event.stopPropagation();
  });
  $(document).on("click", function () {
      $(".menu_1").hide();
  });

  $('.navbar-nav-2 .nav-link').click(function(){
      $('.navbar-nav-2 .nav-link').removeClass('active');
      $(this).addClass('active');
  })

  $("#carousel_1").owlCarousel({
      autoplay: false,
      lazyLoad: true,
      loop: false,
      margin: 10,
       /*
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      */
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 7000,
      smartSpeed: 800,
      nav: false,
      responsive: {
        0: {
          items: 1
        },
    
        600: {
          items: 1
        },
    
        1024: {
          items: 1
        },
    
        1366: {
          items: 1
        }
      }
    });


  // carosual 2
  jQuery("#carousel_2").owlCarousel({
      autoplay: false,
      lazyLoad: true,
      loop: true,
      margin: 10,
       /*
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      */
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 7000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
    
        600: {
          items: 3
        },
    
        1024: {
          items: 3
        },
    
        1366: {
          items: 3
        }
      }
    });

     // carosual 3
  jQuery("#carousel_3").owlCarousel({
      autoplay: false,
      lazyLoad: true,
      loop: false,
      margin: 10,
       /*
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      */
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 7000,
      smartSpeed: 800,
      nav: true,
     
      responsive: {
        0: {
          items: 2
        },
    
        600: {
          items: 3
        },
    
        1024: {
          items: 4
        },
    
        1366: {
          items: 4
        }
      }
    });

     // carosual 4
  jQuery("#carousel_4").owlCarousel({
    autoplay: false,
    lazyLoad: true,
    loop: false,
    margin: 10,
     /*
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: true,
    responsive: {
      0: {
        items: 2
      },
  
      600: {
        items: 2
      },
      768:{
        items: 3
      },
  
      1024: {
        items: 4
      },
  
      1366: {
        items: 4
      }
    }
  });

   // carosual 5
   jQuery("#carousel_5").owlCarousel({
    autoplay: false,
    lazyLoad: true,
    loop: false,
    margin: 10,
     /*
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: true,
    responsive: {
      0: {
        items: 3
      },
  
      600: {
        items: 3
      },
  
      1024: {
        items: 6
      },
  
      1366: {
        items: 6
      }
    }
  });

  // carosual 6  (Single page search)
  jQuery("#carousel_6").owlCarousel({
    autoplay: false,
    lazyLoad: true,
    loop: false,
    margin: 10,
     /*
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: true,
    responsive: {
      0: {
        items: 2
      },
  
      600: {
        items: 2
      },
  
      1024: {
        items: 3
      },
  
      1366: {
        items: 4
      }
    }
  });

   // carosual 5
   jQuery("#carousel_7").owlCarousel({
    autoplay: false,
    lazyLoad: true,
    loop: false,
    margin: 10,
     /*
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: true,
    responsive: {
      0: {
        items: 2
      },
  
      600: {
        items: 3
      },
  
      1024: {
        items: 4
      },

      1200: {
        items: 6
      },

  
      1366: {
        items: 6
      }
    }
  });

     // vendor carosual 8_1
     jQuery("#carousel_vendor_1").owlCarousel({
      autoplay: false,
      lazyLoad: true,
      loop: false,
      margin:10,
      padding:10,
       /*
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      */
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 7000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 2
        },
    
        600: {
          items: 3
        },
    
        1024: {
          items: 6
        },
    
        1366: {
          items: 6
        }
      }
    });
     // vendor carosual 8_2
     jQuery("#carousel_vendor_2").owlCarousel({
      autoplay: false,
      lazyLoad: true,
      loop: false,
      margin:10,
      padding:10,
       /*
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      */
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 7000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 2
        },
    
        600: {
          items: 3
        },
    
        1024: {
          items: 6
        },
    
        1366: {
          items: 6
        }
      }
    });
     // vendor carosual 8_3
     jQuery("#carousel_vendor_3").owlCarousel({
      autoplay: false,
      lazyLoad: true,
      loop: false,
      margin:10,
      padding:10,
       /*
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      */
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 7000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 2
        },
    
        600: {
          items: 3
        },
    
        1024: {
          items: 6
        },
    
        1366: {
          items: 6
        }
      }
    });

  

  // $('.r_1 input').popup(); 

  $("#checkAll_v").click(function () {
    $(".check_v").prop('checked', $(this).prop('checked'));
  });

  $('.shipping_method_type .btn-group .btn').click(function(){
    $('.shipping_method_type .btn-group .btn').removeClass('active');
    $(this).addClass('active');
  })

  // vendorPage
  $('.navbar-nav-vendor .nav-link').click(function(){
    $('.navbar-nav-vendor .nav-link').removeClass('active');
    $(this).addClass('active');
})


  $(".hamburger").click(function(){
    
        $(".navigation").toggleClass("open");
  })
  $(".menu_close_btn").click(function(){
    $(".navigation").removeClass("open");
   
  })

  $(".same_sa_billing_class").click(function(){
    $(".checkout_form_part_1").toggle();
  })


  

});

$(document).ready(function() {
var bigimage = $("#big");
var thumbs = $("#thumbs");
//var totalslides = 10;
var syncedSecondary = true;

bigimage
  .owlCarousel({
  items: 1,
  slideSpeed: 2000,
  nav: true,
  autoplay: false,
  dots: false,
  loop: true,
  responsiveRefreshRate: 200,
  navText: [
    '<i class="fas fa-angle-left"></i>',
    '<i class="fas fa-angle-right"></i>'
  ]
})
  .on("changed.owl.carousel", syncPosition);

thumbs
  .on("initialized.owl.carousel", function() {
  thumbs
    .find(".owl-item")
    .eq(0)
    .addClass("current");
})
  .owlCarousel({
  items: 4,
  dots: false,
  nav: true,
  navText: [
    '<i class="fas fa-angle-left"></i>',
    '<i class="fas fa-angle-right"></i>'
  ],
  smartSpeed: 200,
  slideSpeed: 500,
  slideBy: 4,
  responsiveRefreshRate: 100
})
  .on("changed.owl.carousel", syncPosition2);

function syncPosition(el) {
  //if loop is set to false, then you have to uncomment the next line
  //var current = el.item.index;

  //to disable loop, comment this block
  var count = el.item.count - 1;
  var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

  if (current < 0) {
    current = count;
  }
  if (current > count) {
    current = 0;
  }
  //to this
  thumbs
    .find(".owl-item")
    .removeClass("current")
    .eq(current)
    .addClass("current");
  var onscreen = thumbs.find(".owl-item.active").length - 1;
  var start = thumbs
  .find(".owl-item.active")
  .first()
  .index();
  var end = thumbs
  .find(".owl-item.active")
  .last()
  .index();

  if (current > end) {
    thumbs.data("owl.carousel").to(current, 100, true);
  }
  if (current < start) {
    thumbs.data("owl.carousel").to(current - onscreen, 100, true);
  }
}

function syncPosition2(el) {
  if (syncedSecondary) {
    var number = el.item.index;
    bigimage.data("owl.carousel").to(number, 100, true);
  }
}

thumbs.on("click", ".owl-item", function(e) {
  e.preventDefault();
  var number = $(this).index();
  bigimage.data("owl.carousel").to(number, 300, true);
});
});    