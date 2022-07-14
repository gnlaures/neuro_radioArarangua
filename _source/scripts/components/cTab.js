{
    if ($('.c-tab').length) {
        $('.c-tab__header li').on('click', function(e) {
            // select
            let selectedTab = $(this).children('span').attr('data-tab');

            // header active
            $('.c-tab__header span').removeClass('is-active');
            $('.c-tab__header span[data-tab="'+selectedTab+'"]').addClass('is-active');

            // content active
            $('.c-tab__hero__content').removeClass('is-active');
            $('.c-tab__hero__content[data-tab="'+selectedTab+'"]').addClass('is-active');

            // scroll
            goToSection__scroll('.c-tab', 100, 50, 700, 10);
        })
    }
}