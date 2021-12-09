const wrap = document.querySelector('.filter-js');
function filterChange(e) {
    for(let i = 0;i<wrap.children.length;i++){
        wrap.children[i].classList.remove('active');
    }
    e.target.classList.add('active');
}
wrap.addEventListener('click', filterChange);
