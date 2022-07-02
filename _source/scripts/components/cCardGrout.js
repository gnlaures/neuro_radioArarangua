{
    if ($('.c-cardGrout').length) {
        $('.c-cardGrout__more .c-btn').on('click', function() {
            console.log('teste')
           $(this).closest('.c-cardGrout')
               .find('.c-cardGrout__colors')
               .toggleClass('u-dnone');
        });
    }
}