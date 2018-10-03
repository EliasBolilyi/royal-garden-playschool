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
        slidesToShow: 3,
        slidesToScroll: 3
    });
              

});

