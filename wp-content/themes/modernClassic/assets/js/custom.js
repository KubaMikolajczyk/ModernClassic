"use strict";

(function ($) {
    $(document).ready(function () {
        $('.slider-widget').slick({
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            cssEase: 'linear',
            adaptiveHeight: true,
            // autoplay: true,
            // autoplaySpeed: 1000,
            arrows: false,
            dots: true
        });
        $('.news-photo-slider').slick({
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            cssEase: 'linear',
            adaptiveHeight: true,
            // autoplay: true,
            // autoplaySpeed: 1000,
            arrows: false,
            dots: true
        });
        $('.slider-news').slick({
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            cssEase: 'linear',
            adaptiveHeight: true,
            // autoplay: true,
            // autoplaySpeed: 1000,
            arrows: false,
            dots: true
        });
        var producerCatSwiper = new Swiper('#producers .swiper-container', {
            slidesPerView: 2.6,
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 2
                }
            },

            /*autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },*/
            pagination: {
                el: '#producers .swiper-pagination',
                clickable: true,
                renderBullet: function renderBullet(index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                }
            }
        });
        var implementationsCatSwiper = new Swiper('#implementations .swiper-container', {
            slidesPerView: 2.6,
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 2
                }
            },

            /*autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },*/
            pagination: {
                el: '#implementations .swiper-pagination',
                clickable: true,
                renderBullet: function renderBullet(index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                }
            }
        });
    });
})(jQuery);

function crossBurger(x) {
    x.classList.toggle("change");
}