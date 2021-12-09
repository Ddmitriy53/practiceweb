function seoTextVisibility() {
    let seoText = document.querySelectorAll('.seo__text'),
        seoButton = document.querySelector('.seo__button');
    for (let item of seoText) {
        if (item.classList.contains('seo__text--hidden') || item.classList.contains('seo__text--visible')) {
            item.classList.toggle('seo__text--hidden');
            item.classList.toggle('seo__text--visible');
        }
    }
    if (seoButton.textContent == 'Показать все') seoButton.textContent = 'Скрыть';
    else seoButton.textContent = 'Показать все';
}
document.querySelector('.seo__button').onclick = seoTextVisibility;

function footerListToggle() {
    let group = document.querySelector('.footer-firm-list__group');

    if (group.style.display == 'block') group.style.display = 'none';
    else group.style.display = 'block';
}
document.querySelector('.footer-firm-list__title').onclick = footerListToggle;
