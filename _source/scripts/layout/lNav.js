{
    if ($('.l-nav').length) {
        // elements
        let navElement = $('.l-nav');
        let navMobile = $('.l-navMobile');
        let navHamburguer = $('.l-nav .c-hamburguer');
        let navToggleSearch = $('.js-l-nav__toggleSearch');

        // functions
        const closeAllNavElements = () => {
            $('.c-subMenu').removeClass('is-active');
            navHamburguer.removeClass('is-active');
        }
        const disableOverflow = () => {
            $('body').addClass('u-overflowBlocked');
        }
        const enableOverflow = () => {
            $('body').removeClass('u-overflowBlocked');
        }

        // open / close mobile menu
        $('.js-openNavMobile').on('click', function () {
            navMobile.addClass('is-active');
            $('.js-closeNavMobile.c-hamburguer').addClass('is-active');
            disableOverflow();
        });
        $('.js-closeNavMobile').on('click', function () {
            navMobile.removeClass('is-active');
            navHamburguer.removeClass('is-active');
            enableOverflow();
        });

        // scroll changes
        $(window).on('load', function (event) {
            let scrollBody = $(this).scrollTop();
            if (scrollBody > 99) {
                navElement.addClass('is-scrolled');
            } else {
                navElement.removeClass('is-scrolled');
            }
        });
        $(window).on('scroll', function () {
            let scrollBody = $(this).scrollTop();
            // scroll up to 99
            if (scrollBody > 99) {
                navElement.addClass('is-scrolled');
            } else {
                navElement.removeClass('is-scrolled');
            }
            // middle class
            if (scrollBody > 600) {
                navElement.addClass('is-hidden');
                navElement.addClass('is-middle');
            } else {
                navElement.removeClass('is-hidden');
                navElement.removeClass('is-middle');
            }
            // close menus on hidden nav
            if (navElement.hasClass('is-hidden')) {
                closeAllNavElements();
            }
            // reference var
            navElement.scrollInit = scrollBody;
        });

        // search
        navToggleSearch.on('click', function() {
            navToggleSearch.toggleClass('is-active');
            $('.l-nav__search').toggleClass('is-active');
        })

    }
}
