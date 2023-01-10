
$(document).ready(function () {
    AOS.init({
        duration: 1200,
    })
    $(".dropdown").hover(
        function () {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
            $(this).toggleClass('open');
        },
        function () {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
            $(this).toggleClass('open');
        }
    );
    // if ($('.count-number')[0]) {
    //     $('.count-number').each(function () {
    //         var $this = $(this),
    //             countTo = $this.attr('data-count');

    //         $({ countNum: $this.text() }).animate({
    //             countNum: countTo
    //         },
    //             {

    //                 duration: 3000,
    //                 easing: 'linear',
    //                 step: function () {
    //                     $this.text(Math.floor(this.countNum));
    //                 },
    //                 complete: function () {
    //                     $this.text(this.countNum);
    //                 }

    //             });


    //     });
    // }


    $('.js-example-basic-single').select2();
    // navbar fixes top after scroll
    $(window).bind('scroll', function () {
        var navHeight = $('.main_header').height();
        if ($(window).scrollTop() >= navHeight) {
            $('.main_header').addClass('header-fixed');
        } else {
            $('.main_header').removeClass('header-fixed');

        }
    });

    /* close cpllaps navbar*/
    $('.close-nav').click(function (e) {
        e.preventDefault();
        $('.navbar-collapse').removeClass('collapse show');
        $('.over-nav').css('display', 'none');
    });
    $('.hamburger').click(function () {
        $(this).toggleClass("is-active");
        $('.over-nav').toggleClass('is-active');
    });
    $('.over-nav').click(function () {
        $('.navbar-collapse').removeClass('collapse show');
        $('.hamburger').toggleClass("is-active");
        $(this).toggleClass('is-active');
    });
    /* to top*/
    $("body").append('<div class="back-to-top-btn"><i class="fas fa-arrow-up"></i></div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $(".back-to-top-btn").fadeIn();
        } else {
            $(".back-to-top-btn").fadeOut();
        }
    });
    $(".back-to-top-btn").on("click", function () {
        $("html, body").animate({ scrollTop: 0 });
        return false;
    });




    /**
   *   slider
   */
    var mainSlider = new Swiper(".main-slider .swiper", {
        slidesPerView: 1,
        speed: 2000,
        autoplay:
        {
            delay: 5000,
        },
        loop: false,
        spaceBetween: 5,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,

        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 1,
                spaceBetween: 20,
            }
        },
    });
    var clients = new Swiper(".clients .swiper", {
        slidesPerView: 1,
        spaceBetween: 5,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,

        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 5,
                spaceBetween: 20,
            }
        },
    });
    var mSlider = new Swiper(".m-slider .swiper", {
        slidesPerView: 1,
        spaceBetween: 5,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,

        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 20,
            }
        },
    });

    var loading = $(".loading");
    loading.delay(loading.attr("delay-hide")).fadeOut(2000);
    $(document).on('click', '.remove', function (e) {
        e.preventDefault();
        $(this).parent().remove();
    });

});





if ($('.count-number')[0]) {

    function detect_visibility() {

        var top_of_element = $(".count-number").offset().top;
        var bottom_of_element = $(".count-number").offset().top + $(".count-number").outerHeight();
        var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
        var top_of_screen = $(window).scrollTop();

        if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
            // Element is visible write your codes here
            // You can add animation or other codes here
            $('.count-number').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');

                $({ countNum: $this.text() }).animate({
                    countNum: countTo
                },
                    {

                        duration: 3000,
                        easing: 'linear',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                        }

                    });


            });
        } else {
            // the element is not visible, do something else
        }

    }

    // detect when element gets visible on scroll
    $(window).scroll(function () {
        detect_visibility();
    });

    // detect when screen opens for first time
    detect_visibility();
}