$(document).ready(function () {

    /* owl-slider*/
    $('.owl-slider').owlCarousel({
        autoplay: false,
        nav: true,
        dots: false,
        navText: false,
        transitionStyle: true,
        autoplayTimeout: 3000,
        navText: [
            "<i data-feather='arrow-right'></i>",
            "<i data-feather='arrow-left'></i>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
});
