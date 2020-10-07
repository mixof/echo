$(document).ready(function(e){

    $('.hamburger').on('click',function(e){

        openCloseMenu();
    });

    $('.mobile-overlay').on('click', function(e){

        openCloseMenu();

    });



});

function openCloseMenu(){
    $('.mobile-overlay').toggleClass('is-active');
    $('.hamburger').toggleClass('is-active');
    $('.main-menu ul').toggleClass('is-mobile');
}