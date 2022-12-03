$(document).ready(function(){
    AOS.init();

    var $navbar = $("#primaryNav");

    AdjustHeader(); // Incase the user loads the page from halfway down (or something);
    $(window).scroll(function() {
        AdjustHeader();
    });

    function AdjustHeader(){
        if ($(window).scrollTop() > 50) {
            if (!$navbar.hasClass("stickyTop")) {
                $navbar.addClass("stickyTop");
            }
        } else {
            $navbar.removeClass("stickyTop");
        }
    }

    $('.navbar-nav>li>a').on('click', function(){
        if ($(this).hasClass('dropdown-toggle')) {
            return false;    
        } else {
            $('.navbar-collapse').removeClass('in').attr('aria-expanded', 'false');
        }
    });

    $('#primaryNav a[href^="#"]').on("click", function (e) {
        $("a").each(function () {
            $(this).parents("li").removeClass("active");
        });
        $(this).parents("li").addClass("active");
    });

    $("#developer").click(function () {
        var navHeight = $("#primaryNav").outerHeight();
        $("html, body").animate({
            scrollTop: $(".sec_two").offset().top - navHeight
        },500);
    });

    $("#purchase").click(function () {
        var navHeight = $("#primaryNav").outerHeight();
        $("html, body").animate({
            scrollTop: $(".sec_six").offset().top - navHeight
        },500);
    });

    $("#mortgage").click(function () {
        var navHeight = $("#primaryNav").outerHeight();
        $("html, body").animate({
            scrollTop: $(".sec_seven").offset().top - navHeight
        },500);
    });

    $("#pricelist").click(function () {
        var navHeight = $("#primaryNav").outerHeight();
        $("html, body").animate({
            scrollTop: $(".sec_eight").offset().top - navHeight
        },500);
    });

    $("#plans").click(function () {
        var navHeight = $("#primaryNav").outerHeight();
        $("html, body").animate({
            scrollTop: $(".sec_nine").offset().top - navHeight
        },500);
    });

    $("#document").click(function () {
        var navHeight = $("#primaryNav").outerHeight();
        $("html, body").animate({
            scrollTop: $(".sec_ten").offset().top - navHeight
        },500);
    });

    $("#contact").click(function () {
        var navHeight = $("#primaryNav").outerHeight();
        $("html, body").animate({
            scrollTop: $(".foot_sec").offset().top - navHeight
        },500);
    });

    $('#sec_three_slide').owlCarousel({
        loop: false,
        margin: 0,
        dots: false,
        nav: true,
        items: 1,
        rtl: true
    });

    $('#sec_five_slide').owlCarousel({
        loop: false,
        margin: 0,
        dots: true,
        nav: true,
        items: 1,
        rtl: true
    });

    $("form.searchBox").submit(function (e) {
        var postData = $(this).serializeArray();
        postData[postData.length] = {
            name: "data",
            value: "main-table",
        };

    $([document.documentElement, document.body]).animate({
            scrollTop: $(".sec_eight").offset().top,
        },
        300
    );

    $.ajax({
        url: actionLink,
        type: "POST",
        data: postData,
        success: function (data, textStatus, jqXHR) {
            $("html, body").animate({
                    scrollTop: $("#pricelist").offset().top - 50,
                },
                2000
            );
            $(".tab_table").html(data);
        },
        error: function (request, error) {
            console.log(error);
        },
    });
    e.preventDefault();
    });
});