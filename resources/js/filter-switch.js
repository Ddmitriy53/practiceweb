const filterBtn = document.querySelectorAll('.filter-button-js');

function filterSwitch() {
    let filterItem = document.querySelector('.filter-item-js.active');
    filterItem.classList.remove('active');
    for (let item of filterBtn) {
        if (this.classList.contains('next')) filterItem.nextElementSibling.classList.add('active');
        else filterItem.previousElementSibling.classList.add('active');
    }
}
for (let item of filterBtn) {
    item.addEventListener('click', filterSwitch);
}
