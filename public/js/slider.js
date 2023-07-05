


$(window).on('load', function () {


    // Slider =======================================
    $(".review_slider").slick({
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,

        infinite: true,
        speed: 800,
        fade: false,
        adaptiveHeight: true,
        lazyLoad: 'ondemand',

        cssEase: 'linear',
        swipeToSlide: true,
        waitForAnimate: false,
        draggable: true,

        responsive: [
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $(".modal_slider").slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,
        centerMode: true,
        centerPadding: '0',


        infinite: true,
        speed: 800,
        fade: false,
        adaptiveHeight: false,
        lazyLoad: 'ondemand',

        cssEase: 'linear',
        swipeToSlide: true,
        waitForAnimate: false,
        draggable: true,
    });

    $(".event_box").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,
        centerMode: true,
        centerPadding: '0',


        infinite: true,
        speed: 800,
        fade: true,
        adaptiveHeight: false,
        lazyLoad: 'ondemand',

        cssEase: 'linear',
        swipeToSlide: true,
        waitForAnimate: false,
        draggable: true,
    });

});




