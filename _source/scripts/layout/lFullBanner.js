{
    const swiper__headerHome = new Swiper('.js-l-fullBanner__swiper', {
        speed: 400,
        spaceBetween: 0,
        touchRatio: 0.25,
        autoHeight: true,
        navigation: {
            nextEl: '.l-fullBanner__arrows .swiper-button-next',
            prevEl: '.l-fullBanner__arrows .swiper-button-prev',
        },
    });

    if ($('.l-fullBanner .swiper-slide').length) {
        let slideLength = $('.l-fullBanner .swiper-slide').length;
        if (slideLength <= 1) {
            $('.l-fullBanner__arrows').addClass('u-dnone');
        }
    }
}
