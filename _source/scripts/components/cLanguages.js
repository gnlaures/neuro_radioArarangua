{
    $('.c-languages ul ul li a').on('click', function(e) {
        e.preventDefault();
        $('.js-c-languages__toggle').text($(this).text());

        // opcional:
        sessionStorage.setItem('pageLanguage', $(this).text());
    })
}