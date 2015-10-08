jQuery(document).ready(function($) {
    $('.bxslider').bxSlider({
        auto: true,
        controls: false,
        speed: 1000,
        pause: 7000,
        onSliderLoad: function(){
            $(".article").css("visibility", "visible");
        }
    });

    $('.tweets').bxSlider({
        auto: true,
        controls: false,
        speed: 2000,
        pause: 7000,
        onSliderLoad: function(){
            $('p').css("visibility", "visible");
        }
    });
});