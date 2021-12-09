import Swiper from 'swiper/bundle';

import 'swiper/css/bundle';

const swiper = new Swiper('.swiper', {
    speed: 1300,
    loop: true,
    // autoplay: {
    //     delay: 4000,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    breakpoints: {
        280: {
            slidesPerView: 1,
            centeredSlides: true
        },
        768: {
            slidesPerView: 2
        },
        992: {
            slidesPerView: 3
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 20
        },
        1440: {
            slidesPerView: 5,
            spaceBetween: 30
        }
    }
});
