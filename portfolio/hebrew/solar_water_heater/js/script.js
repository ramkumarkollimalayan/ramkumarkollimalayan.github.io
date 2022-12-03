$(document).ready(function(){
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        var navHeight = $('header .navbar').height();

        if (scroll > navHeight) {
            $('header .navbar').addClass("scroll_fixed");
        } else {
            $('header .navbar').removeClass("scroll_fixed");
        }
    });

    $(document).on('click', '.navbar-toggle', function(){
        setTimeout(function(){
            if($('.navbar-collapse').hasClass('in')) {
                $('header .navbar').addClass("bg-white");
            } else {
                $('header .navbar').removeClass("bg-white");
            }
        }, 400);
    });

    $("#whoweare").click(function () {
        $("html, body").animate(
            {
                scrollTop: $(".sec_three").offset().top - 70,
            },
            2000
        );
    });

    $("#gallery").click(function () {
        $("html, body").animate(
            {
                scrollTop: $(".sec_five").offset().top - 70,
            },
            2000
        );
    });

    $("#recommendation").click(function () {
        $("html, body").animate(
            {
                scrollTop: $(".sec_six").offset().top - 70,
            },
            2000
        );
    });
    
    $("#promotion").click(function () {
        $("html, body").animate(
            {
                scrollTop: $(".head_sec_three").offset().top - 70,
            },
            2000
        );
    });

    var numItems = $(".sec_six_post").length;

    $(".loadnextsec button").click(function () {
        $("html, body").animate(
            {
                scrollTop: $(".head_sec_three").offset().top - 65,
            },
            2000
        );
    });

    $(".sec_six_post").slice(0, 3).show();
    $("body").on("click touchstart", ".load-more", function (e) {
        e.preventDefault();
        $(".sec_six_post:hidden").slice(0, 4).slideDown();
        if ($(".sec_six_post:hidden").length == 0) {
            $(".load-more").css("visibility", "hidden");
        }
        $("html,body").animate(
            {
                scrollTop: $(this).offset().top,
            },
            1000
        );
    });
});