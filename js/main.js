$(document).ready(function(e){

    $('.hamburger').on('click',function(e){

        openCloseMenu();
    });

    $('.mobile-overlay').on('click', function(e){

        openCloseMenu();

    });


    var swiper1 = new Swiper('.swiper-container.members-list', {
        slidesPerView: 3,
        spaceBetween: 15,
        loop: true,
        pagination: {
            el: '.members-list .swiper-pagination',
        },
        breakpoints: {
            // when window width is >= 320px
            0: {
                slidesPerView: 1
            },

           520:{
                slidesPerView: 2,
            },

           820: {
                slidesPerView: 3,
                spaceBetween: 15
            }
        }
    });


    var swiper2 = new Swiper('.tips-slider .swiper-container', {
        slidesPerView: 3,
        spaceBetween: 12,
        loop: true,
        pagination: {
            el: '.tips-slider .swiper-pagination',
        },
        breakpoints: {
            // when window width is >= 320px
            0: {
                slidesPerView: 1
            },

            520:{
                slidesPerView: 2,
            },

            820: {
                slidesPerView: 3,
                spaceBetween: 15
            }
        }
    });


});

function openCloseMenu(){
    $('.mobile-overlay').toggleClass('is-active');
    $('.hamburger').toggleClass('is-active');
    $('.main-menu ul').toggleClass('is-mobile');
}