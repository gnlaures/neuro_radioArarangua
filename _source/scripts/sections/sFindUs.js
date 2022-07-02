{
    // mobile aside
    function toggleMobileAside() {
        $('.s-findUs').toggleClass('is-mobile-active');
    }

    $('.js-s-findUs__mobileControl').on('click', function(e) {
        e.preventDefault();
        toggleMobileAside();
    });

    $('.s-findUs__aside .c-form').on('submit', function(e) {
        e.preventDefault();
        toggleMobileAside();
    });

    // toggle map/3d
    $('.js-s-findUs__toggleDecortiles').on('click', function() {
        $('.s-findUs__content__gallery').toggleClass('is-active');
        $(this).toggleClass('is-active');
        $('.s-findUs').removeClass('is-mobile-active');
    });
}