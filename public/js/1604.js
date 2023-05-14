$(document).ready(function(){

    var swiper1 = new Swiper('.s1', {
        slidesPerView: 4,
        loopedSlides:2,
        spaceBetween: 0,
        parallax: true,
        autoplay: 5000,
        speed: 800,
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints :{
            1090:{
                slidesPerView: 3,
                spaceBetweenSlides: 10,
            },
            768:{
                spaceBetweenSlides: 10,
                slidesPerView: 2,
            },
            450:{
                spaceBetweenSlides: 20,
                slidesPerView: 1,
            }
        }
    });
    var swiper11 = new Swiper('.s11', {
        slidesPerView: 3,
        loopedSlides: 3,
        spaceBetweenSlides: 20,
        parallax: true,
        autoplay: 5000,
        speed: 800,
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: '.swiper-button-next2',
            prevEl: '.swiper-button-prev2',
        },

    });

    var swiper2 = new Swiper('.s2', {
        slidesPerView: 4,
        loopedSlides:2,
        slidesPerColumn: 1,
        spaceBetween: 0,
        parallax: true,
        autoplay: 5000,
        speed: 800,
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints :{
            1090:{
                slidesPerView: 3,
                spaceBetweenSlides: 10,
            },
            768:{
                spaceBetweenSlides: 10,
                slidesPerView: 2,
            },
            450:{
                spaceBetweenSlides: 20,
                slidesPerView: 1,
            }
        }
    });
    var swiper22 = new Swiper('.s22', {
        slidesPerView: 3,
        loopedSlides: 3,
        spaceBetweenSlides: 20,
        parallax: true,
        autoplay: 5000,
        speed: 800,
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: '.swiper-button-next2',
            prevEl: '.swiper-button-prev2',
        },

    });


    var swiper3 = new Swiper('.s3', {
        slidesPerView: 4,
        loopedSlides:2,
        slidesPerColumn: 1,
        spaceBetween: 0,
        parallax: true,
        autoplay: 5000,
        speed: 800,
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints :{
            1090:{
                slidesPerView: 3,
                spaceBetweenSlides: 10,
            },
            768:{
                spaceBetweenSlides: 10,
                slidesPerView: 2,
            },
            450:{
                spaceBetweenSlides: 20,
                slidesPerView: 1,
            }
        }
    });
    var swiper33 = new Swiper('.s33', {
        slidesPerView: 3,
        loopedSlides: 3,
        spaceBetweenSlides: 20,
        parallax: true,
        autoplay: 5000,
        speed: 800,
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: '.swiper-button-next2',
            prevEl: '.swiper-button-prev2',
        },

    });

    $(".nav-pills li").on("click",function(){
        reinitSwiper(swiper1);
        reinitSwiper(swiper11);
        reinitSwiper(swiper2);
        reinitSwiper(swiper22);
        reinitSwiper(swiper3);
        reinitSwiper(swiper33);
    });

    function reinitSwiper(swiper) {
        setTimeout(function () {
            swiper.update();
        }, 400);
    }




    $('.type-1604 .sclick').click(function(){
        var url = $(this).attr('src');
        $(this).parent().parent().parent().parent().parent().find('.tpfclick').attr("src",url);
    });



});