$(document).ready(function(){


    //HAMBURGER
    $('.nav-icon').click(function(){
        $(this).toggleClass('open');
        $('.main-menu').toggleClass('open-menu');
        $('body').toggleClass('disable-scroll');
    });        

});

