(function ($) {
    "use strict";

    $(window).on('load', function(){
        //===== Prealoder
        $("#preloader").delay(400).fadeOut();
    });

    $(document).ready(function () {
        //05. sticky header
        function sticky_header(){
            var wind = $(window);
            var sticky = $('header');
            wind.on('scroll', function () {
                var scroll = wind.scrollTop();
                if (scroll < 100) {
                    sticky.removeClass('sticky');
                } else {
                    sticky.addClass('sticky');
                }
            });
        }
        sticky_header();
        //===== Back to top

        // Show or hide the sticky footer button
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 600) {
                $('.back-to-top').fadeIn(200)
            } else {
                $('.back-to-top').fadeOut(200)
            }
        });

        //Animate the scroll to yop
        $('.back-to-top').on('click', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: 0,
            }, 900);
        });






        if (window.matchMedia('(max-width: 991.98px)').matches) {
            $('.dropdown_wrap>a').click(function(e) {
                e.preventDefault();
                var $this = $(this);
                // $('.drop_box>a').removeClass('open');
                // $this.toggleClass('open');

                if ($this.next().hasClass('show')) {
                    $this.next().removeClass('show');
                    $this.next().slideUp(350);
                    $('.drop_box>a').removeClass('open');
                    
                } else {
                    $this.parent().parent().find('ul').removeClass('show');
                    $this.parent().parent().find('ul').slideUp(350);
                    $this.next().toggleClass('show');
                    $this.next().slideToggle(350);

                }
            }); 
        }

           // Hamburger-menu
        $('.hamburger-menu').on('click', function () {
            $('.hamburger-menu .line-top, .menu').toggleClass('current');
            $('.hamburger-menu .line-center').toggleClass('current');
            $('.hamburger-menu .line-bottom').toggleClass('current');
        });        

        // Hamburger-menu
        $('.filter_btn, .fitler_overlay').on('click', function (e) {
            e.preventDefault();
            $('.fitler_wrap, .fitler_overlay').toggleClass('current');
        });




        // Testimonial Slider 
        $("#testimonial-carousel").owlCarousel({
            items:2,
            loop:true,
            margin:20,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            arrow:true,
            responsive:{
                0:{
                    items:1,
                    
                }
                
            }
        });


        


        //06. magnific Popup Initialize
        function magnificPopupInit() {
            $('.content a').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        magnificPopupInit();

 

        //11. Video Popup Initialize
        function videoPopupInit() {
            $('#play-video').magnificPopup({
                type: 'iframe',
                iframe: {
                    patterns: {
                        youtube: {
                          index: 'youtube.com/', 

                          id: 'v=',
                          src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                        },
                    },

                  srcAction: 'iframe_src',
                }
            });
        }
        videoPopupInit();
    });

})(jQuery);