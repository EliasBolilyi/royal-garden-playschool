$(document).ready(function(){

    //HAMBURGER
    $('.nav-icon').click(function(){
        $(this).toggleClass('open');
        $('.main-menu').toggleClass('open-menu');
        $('body').toggleClass('disable-scroll');
    });    
    
    $('.slider-first-block').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><img src="http://localhost:8888/royal-garden-playschool/wp-content/themes/garden/build/images/prev.svg"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="http://localhost:8888/royal-garden-playschool/wp-content/themes/garden/build/images/next.svg"></button>'
    });

    $('.gallery-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><img src="http://localhost:8888/royal-garden-playschool/wp-content/themes/garden/build/images/prev.svg"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="http://localhost:8888/royal-garden-playschool/wp-content/themes/garden/build/images/next.svg"></button>'
    });


    $('.slider-about').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><img src="http://localhost:8888/royal-garden-playschool/wp-content/themes/garden/build/images/prev.svg"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="http://localhost:8888/royal-garden-playschool/wp-content/themes/garden/build/images/next.svg"></button>',
        fade: true,
        asNavFor: '.slider-about-nav'
    });
    $('.slider-about-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 2
              }
            },
            // {
            //   breakpoint: 480,
            //   settings: {
            //     arrows: false,
            //     centerMode: true,
            //     centerPadding: '40px',
            //     slidesToShow: 1
            //   }
            // }
          ],
        asNavFor: '.slider-about'
    });

    $('.meal-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><img src="http://localhost:8888/royal-garden-playschool/wp-content/themes/garden/build/images/prev.svg"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="http://localhost:8888/royal-garden-playschool/wp-content/themes/garden/build/images/next.svg"></button>',
        fade: true,
        asNavFor: '.meal-slider-nav'
    });
    $('.meal-slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        // responsive: [
        //     {
        //       breakpoint: 1025,
        //       settings: {
        //         slidesToShow: 2
        //       }
        //     },
        //   ],
        asNavFor: '.meal-slider'
    });
    


    $('.play-wrp').click(function(){
        $(this).toggleClass('active');
        $('.about-video-wrp').toggleClass('active');
        $('.play-wrp img').toggleClass('active');
    }); 
    
    var swiper = new Swiper('.block-rewiev-slider', {
        slidesPerView: 3,
        freeMode: true,
        centeredSlides: true,
        pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
          clickable: true,
        },
        breakpoints: {
            480: {
              slidesPerView: 1,
            }
          }
      });

    var swiper = new Swiper('.event-slider', {
    slidesPerView: 1,
    // freeMode: true,
    centeredSlides: true,
    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
        }
        }
    });

});

