{
    const cFavoriteToggle = document.querySelectorAll('.c-favoriteToggle');

    cFavoriteToggle.forEach((item) => {
        item.addEventListener('click', () => {
            item.classList.toggle('is-active');

            let thisCountChildrens = parseInt(item.querySelector('.c-favoriteToggle__count').innerText);

            if (item.classList.contains('is-active')) {
                item.querySelector('.c-favoriteToggle__count').innerText = thisCountChildrens + 1
            } else {
                item.querySelector('.c-favoriteToggle__count').innerText = thisCountChildrens - 1
            }
        })
    })
}
