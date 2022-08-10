$(document).ready(function(){
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        var navHeight = $('.navbar').height();
    
        if ( scroll > navHeight ) {
            $(".navbar").addClass("navbar-fixed-top");
            $('.header_content').css({
                'margin-top' : navHeight + 'px'
            });
        } else {
            $(".navbar").removeClass("navbar-fixed-top");
            $('.header_content').removeAttr('style');
        }
    });

    $('.navbar-toggle').on('click', function(){
        $(this).toggleClass('cross');
    });


    $('.navbar-nav li a[href*="#"]').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });

    var navHeight = $('.navbar').height();
    $(".navbar-nav li a[href*='#acquainted']").click(function() {
        $('html,body').animate({
            scrollTop: $("#acquainted").offset().top - navHeight},
            1500);
    });

    $(".navbar-nav li a[href*='#howitworks']").click(function() {
        $('html,body').animate({
            scrollTop: $("#howitworks").offset().top - navHeight},
            1500);
    });

    $(".navbar-nav li a[href*='#benefits']").click(function() {
        $('html,body').animate({
            scrollTop: $("#benefits").offset().top - navHeight},
            1500);
    });

    $(".navbar-nav li a[href*='#recommend']").click(function() {
        $('html,body').animate({
            scrollTop: $("#recommend").offset().top - navHeight},
            1500);
    });

    $(".navbar-nav li a[href*='#contact']").click(function() {
        $('html,body').animate({
            scrollTop: $("#contact").offset().top - navHeight},
            1500);
    });

    $('#recommend_slide').owlCarousel({
        rtl:    true,
		loop:   true,
        center: true,
		margin: 15,
		nav:    true,
		navText: ['<img src="images/arw_right.png" alt="right-arrow">', '<img src="images/arw_left.png" alt="left-arrow">'],
		items:  3,
		dots:   false,
        responsive : {
            0 : {
                items:  1,
                margin: 0
            },
            768 : {
                items:  3
            }
        }
    });
});