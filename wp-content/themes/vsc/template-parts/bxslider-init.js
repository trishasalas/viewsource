jQuery(document).ready(function($) {
    $('.bxslider').bxSlider({
        auto: true,
        controls: false,
        speed: 2000,
        pause: 5000,
        onSliderLoad: function(){
            $(".article").css("visibility", "visible");
        }
    });

    $('.tweets').bxSlider({
        auto: true,
        controls: false,
        speed: 2000,
        pause: 5000,
        onSliderLoad: function(){
            $('p').css("visibility", "visible");
        }
    });
});