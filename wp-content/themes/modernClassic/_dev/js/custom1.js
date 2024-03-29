"use strict";

(function ($) {
    $(document).ready(function () {

        $('#go-top').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $('body').offset().top - 200
            }, 1000, 'linear');
        });

        $('.burger-container').on('click', function(){
            $('.inner').toggleClass('active');

            if($(document).outerWidth(true) < '1750'){
                this.parentNode.style.setProperty('display', 'none', 'important');
                document.getElementsByClassName('close-aside')[0].style.setProperty('display', 'inline-block', 'important');
            }
        });

        $('.close-aside').on('click', function(){
            $('.inner').toggleClass('active');
            $('.burger-container').parent().css('display', 'flex', 'important');
            $('.burger-container').toggleClass('change');
            this.style.setProperty('display', 'none', 'important');
        });

        $('.mouse').on('click', function () {
            $('html,body').animate({
                scrollTop: $('.producers_section').offset().top - 150
            }, 500);
        });

        $('.slider-widget').slick({
            infinite: true,
            speed: 3000,
            slidesToShow: 1,
            cssEase: 'ease-in-out',
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            dots: true
        });

        $('.news-photo-slider').slick({
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            cssEase: 'ease-in-out',
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 3000,
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

        $('.partners-slider').slick({
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            infinite: true,
            speed: 1000,
            slidesToShow: 3,
            cssEase: 'ease-in-out',
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true
        });

        $('.product-image-slider-wrapper').slick({
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            cssEase: 'ease-in-out',
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

        var nav = document.getElementById('masthead');

        window.onscroll = function() {

            if(window.pageYOffset > 100){
                nav.style.background = 'rgba(0,0,0,.5)';
                nav.style.top = '0';
                nav.style.paddingTop = '1rem';
                nav.style.paddingBottom = '1rem';
                nav.style.position = 'fixed';
            } else {
                nav.style.background = 'none';
                nav.style.top = '100px';
                nav.style.position = 'absolute';
            }
        }

    });
})(jQuery);

function crossBurger(x) {
    x.classList.toggle("change");
}

function initMap() {
    // The location of Uluru
    var warsaw = {lat: 52.237049, lng: 21.017532};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 15,
            center: warsaw,
            disableDefaultUI: true,
            styles: [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#212121"
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#212121"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#d29838"
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#bdbdbd"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#181818"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#1b1b1b"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#2c2c2c"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#8a8a8a"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#373737"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#3c3c3c"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#4e4e4e"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#3d3d3d"
                        }
                    ]
                }
            ]
        });
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: warsaw, map: map});
}