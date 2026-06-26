import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

window.Swiper = Swiper;
window.SwiperModules = { Navigation, Pagination, Autoplay };

const merchandiseSwiper = new Swiper("#merchandise-swiper", {
    modules: [window.SwiperModules.Navigation],
    loop: true,
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-next-btn",
        prevEl: ".swiper-prev-btn",
    },
    breakpoints: {
        320: { slidesPerView: 1, spaceBetween: 24 },
        768: { slidesPerView: 2, spaceBetween: 24 },
        1024: { slidesPerView: 3, spaceBetween: 32 },
    },
});
