{
    if ($('.c-toggleList').length) {
        $('.c-toggleList__header').on('click', function() {
            if ($(this).parent().hasClass('is-active')) {
                $(this).parent().toggleClass('is-active');
            } else {
                $('.c-toggleList').removeClass('is-active')
                $(this).parent().addClass('is-active');
            }
        });
    }
}
