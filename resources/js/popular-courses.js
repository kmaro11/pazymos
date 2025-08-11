import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

function updatePeekOpacity(swiper) {
    swiper.slides.forEach((slide, idx) => {
        slide.classList.remove('swiper-slide-peek');
    });
    // Find the index of the last fully visible slide
    const lastVisible = swiper.activeIndex + Math.floor(swiper.params.slidesPerView) - 1;
    const peekIndex = lastVisible + 1;
    if (swiper.slides[peekIndex]) {
        swiper.slides[peekIndex].classList.add('swiper-slide-peek');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    if (window.innerWidth >= 768) {
        // Initialize popular-courses swiper
        const popularCoursesSwiper = document.querySelector('.popular-courses-swiper');
        if (popularCoursesSwiper) {
            new Swiper('.popular-courses-swiper', {
                modules: [Navigation],
                spaceBetween: 24,
                navigation: {
                    nextEl: '.popular-courses-next',
                    prevEl: '.popular-courses-prev',
                },
                loop: false,
                breakpoints: {
                    1024: {
                        slidesPerView: 3.22,
                        spaceBetween: 24,
                        slidesOffsetBefore: 56,
                        slidesOffsetAfter: 56,
                    },
                    768: { slidesPerView: 2,
                        slidesOffsetBefore: 14,
                        slidesOffsetAfter: 14, },
                },
                on: {
                    setTranslate: function () {
                        updatePeekOpacity(this);
                    },
                    slideChange: function () {
                        updatePeekOpacity(this);
                    },
                    afterInit: function () {
                        updatePeekOpacity(this);
                    }
                }
            });
        }

        // Initialize popular-trainings swiper
        const popularTrainingsSwiper = document.querySelector('.popular-trainings-swiper');
        if (popularTrainingsSwiper) {
            new Swiper('.popular-trainings-swiper', {
                modules: [Navigation],
                spaceBetween: 24,
                navigation: {
                    nextEl: '.popular-trainings-next',
                    prevEl: '.popular-trainings-prev',
                },
                loop: false,
                breakpoints: {
                    1024: {
                        slidesPerView: 3.22,
                        spaceBetween: 24,
                        slidesOffsetBefore: 56,
                        slidesOffsetAfter: 56,
                    },
                    768: { slidesPerView: 2,
                        slidesOffsetBefore: 14,
                        slidesOffsetAfter: 14, },
                },
                on: {
                    setTranslate: function () {
                        updatePeekOpacity(this);
                    },
                    slideChange: function () {
                        updatePeekOpacity(this);
                    },
                    afterInit: function () {
                        updatePeekOpacity(this);
                    }
                }
            });
        }
    }
});