jQuery(function($) {
    $(window).load(function() {
        // console.log(fmwp_is_busy( 'individual_forum' ));
        if(fmwp_is_busy( 'individual_forum' ))
        {
            let timerId = setInterval(function(){
                // console.log(fmwp_is_busy( 'individual_forum' ));
                if(!fmwp_is_busy( 'individual_forum' )){

                    $('#loading-animation').hide();
                    clearInterval(timerId);
                }
            }, 300);

        }else $('#loading-animation').hide();

    });
    $(document).ready(function (e) {

        $('.js-accordion-title').on('click', function () {

            $(this).next().slideToggle(200);

            $(this).toggleClass('open', 200);
        });

        $('.tabs-wrap .nav-tabs a').click(function(e){
            e.preventDefault();
            console.log('rfd');
            $(this).tab('show');
        });


        /*-------------------------COUTDOWN TIMER -------------------------------------------*/

// Set the date we're counting down to
        var countDownDate = new Date("Jan 31, 2021 12:37:25").getTime();

// Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);


            if(days>9)
            {
                days=days.toString();
                $('.coutdown-timer .days .num-wrap').html('');

                for (var i = 0, len = days.length; i < len; i += 1) {

                    $('.coutdown-timer .days .num-wrap').append('<span class="timer-numb">'+days.charAt(i)+'</span>');
                }
            }
            else{
                $('.coutdown-timer .days .num-wrap').html('');
                $('.coutdown-timer .days .num-wrap').append('<span class="timer-numb">0</span>');
                $('.coutdown-timer .days .num-wrap').append('<span class="timer-numb">'+days+'</span>');

            }



            if(hours>9)
            {
                hours=hours.toString();
                $('.coutdown-timer .hours .num-wrap').html('');

                for (var i = 0, len = hours.length; i < len; i += 1) {

                    $('.coutdown-timer .hours .num-wrap').append('<span class="timer-numb">'+hours.charAt(i)+'</span>');
                }
            }
            else{
                $('.coutdown-timer .hours .num-wrap').html('');
                $('.coutdown-timer .hours .num-wrap').append('<span class="timer-numb">0</span>');
                $('.coutdown-timer .hours .num-wrap').append('<span class="timer-numb">'+hours+'</span>');

            }

            if(minutes>9)
            {
                minutes=minutes.toString();
                $('.coutdown-timer .minutes .num-wrap').html('');

                for (var i = 0, len = minutes.length; i < len; i += 1) {

                    $('.coutdown-timer .minutes .num-wrap').append('<span class="timer-numb">'+minutes.charAt(i)+'</span>');
                }
            }
            else{
                $('.coutdown-timer .minutes .num-wrap').html('');
                $('.coutdown-timer .minutes .num-wrap').append('<span class="timer-numb">0</span>');
                $('.coutdown-timer .minutes .num-wrap').append('<span class="timer-numb">'+minutes+'</span>');

            }

            if(seconds>9)
            {
                seconds=seconds.toString();
                $('.coutdown-timer .seconds .num-wrap').html('');

                for (var i = 0, len = seconds.length; i < len; i += 1) {

                    $('.coutdown-timer .seconds .num-wrap').append('<span class="timer-numb">'+seconds.charAt(i)+'</span>');
                }
            }
            else{
                $('.coutdown-timer .seconds .num-wrap').html('');
                $('.coutdown-timer .seconds .num-wrap').append('<span class="timer-numb">0</span>');
                $('.coutdown-timer .seconds .num-wrap').append('<span class="timer-numb">'+seconds+'</span>');

            }


            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                $('.coutdown-timer').html("EXPIRED");
            }
        }, 1000);




        /*-------------------------END COUTDOWN TIMER -------------------------------------------*/

        $('.hamburger').on('click', function (e) {

            openCloseMenu();
        });

        $('.mobile-overlay').on('click', function (e) {

            openCloseMenu();

        });


        var swiper1 = new Swiper('.swiper-container.members-list', {
            slidesPerView: 3,
            spaceBetween: 15,
            loop: true,
            pagination: {
                el: '.members-list .swiper-pagination',
                clickable: true
            },
            breakpoints: {
                // when window width is >= 320px
                0: {
                    slidesPerView: 1
                },

                520: {
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
            observer: true,
            observeParents: true,
            pagination: {
                el: '.tips-slider .swiper-pagination',
                clickable: true
            },
            breakpoints: {
                // when window width is >= 320px
                0: {
                    slidesPerView: 1
                },

                520: {
                    slidesPerView: 2,
                },

                820: {
                    slidesPerView: 3,
                    spaceBetween: 15
                }
            }
        });


    });

    function openCloseMenu() {
        $('.mobile-overlay').toggleClass('is-active');
        $('.hamburger').toggleClass('is-active');
        $('.main-menu ul').toggleClass('is-mobile');
    }

});