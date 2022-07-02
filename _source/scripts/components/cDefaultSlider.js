{
    function createSlider(element) {
        let swiperHero = element + ' .c-defaultSlider__swiper';
        let swiperArrows = element + ' .c-defaultSlider__arrows';

        let options = {
            speed: 400,
            spaceBetween: 0,
            autoHeight: true,
            navigation: {
                nextEl: swiperArrows + ' .swiper-button-next',
                prevEl: swiperArrows + ' .swiper-button-prev',
            },
        };
        let slider = new Swiper(swiperHero, options);
        return slider;
    }

    createSlider('.s-product__gallery');
    createSlider('.s-product__gallerySmall');
}