$(document).ready(function(){

    $("#main-section .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive: {
            0: {
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[2000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
});