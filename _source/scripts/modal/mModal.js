{
    const defaultModal = $('.m-modal');
    const closeModal = $('.js-m-modal__close');
    const closeAllModals = $('.js-m-modal__closeAll');
    const openModal = $('.js-m-modal__open');
    const body = $('body');

    closeModal.on('click', function(e) {
        e.preventDefault();
        let modalToClose = $(this).attr('href');
        $(modalToClose).removeClass('is-active');

        // hash control
        history.back()

        // body overflow
        setTimeout(() => {
            if (!$('.m-modal.is-active').length) {
                body.removeClass('u-overflowBlocked');
            }
        }, 50)
    });

    closeAllModals.on('click', function(e) {
        e.preventDefault();
        defaultModal.removeClass('is-active');

        // hash control
        window.location.hash = '';

        // overflow
        body.removeClass('u-overflowBlocked');
    });

    openModal.on('click', function(e) {
        e.preventDefault();
        // open
        let modalToOpen = $(this).attr('href');
        $(modalToOpen).addClass('is-active');

        // hash
        window.location.hash = modalToOpen;

        // overflow
        body.addClass('u-overflowBlocked');
    })

    $(window).on('load', function() {
        let hash = window.location.hash;
        if ($(hash).hasClass('m-modal')) {
            $(hash).addClass('is-active');
            body.addClass('u-overflowBlocked');
        }
    })
}