 {
    // feedbacks
     $('.c-form').on('submit', function(e) {
         e.preventDefault();

         if ($(this).find('.c-feedbackForm').length) {
             $(this)
                 .find('.c-form__hero')
                 .addClass('u-dnone')
                 .closest('.c-form')
                 .find('.c-form__fieldsHero')
                 .addClass('u-dnone')

             // load
             $(this)
                 .closest('.c-form')
                 .find('.c-feedbackForm__status.--load')
                 .removeClass('u-dnone');

             // success
             console.log('Fazer aqui a lógica para o sucesso do envio');

             // fail
             console.log('Fazer aqui a lógica para o erro do envio');
         }
     });

    // select
    // const cForm__selects = document.querySelectorAll('.c-form select');
    // cForm__selects.forEach((select) => {
    //     select.addEventListener('click', function () {
    //         select.parentElement.parentElement.classList.add('is-active');
    //     })
    //     select.addEventListener('change', function (e) {
    //         let selectedValue = select.children[select.selectedIndex].text;
    //         select.closest('.c-form__field').querySelectorAll('.inputBox')[0].children[0].value = selectedValue
    //         select.parentElement.parentElement.classList.remove('is-active');
    //     })
    //     select.addEventListener('focusout', function () {
    //         select.parentElement.parentElement.classList.remove('is-active');
    //     })
    // });

    // input attach
    const cForm__attach = document.querySelectorAll('.c-form .js-field__attach');
    cForm__attach.forEach((input) => {
        input.addEventListener('change', function () {
            let t = input.value.split('fakepath')[1];
            input.closest('.--file').querySelectorAll('.js-field__text')[0].value = t
        })
    })
 }
