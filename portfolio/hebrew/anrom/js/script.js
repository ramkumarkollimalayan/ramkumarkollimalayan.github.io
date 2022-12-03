$(document).ready(function(){
    $('.navbar-toggle').on('click', function(){
        $(this).toggleClass('cross');
    });

     if ($(window).width() > 768) {
        setTimeout(function() {
    $('.grid').masonry({
        itemSelector: '.grid-item',
        gutter: 10
    });
    }, 2000);
}

    var navbar_height = $('.navbar').height();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if( scroll > navbar_height ) {
            $('.navbar').addClass('navbar-fixed-top');
        } else {
            $('.navbar').removeClass('navbar-fixed-top');
        }
    });

    $('.navbar-nav li a[href*="#"]').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });

    $(".navbar-nav li a[href*='#home']").click(function() {
        $('html,body').animate({
            scrollTop: $("#home").offset().top - 60},
            'slow');
    });

    $(".navbar-nav li a[href*='#niceToMeet']").click(function() {
        $('html,body').animate({
            scrollTop: $("#niceToMeet").offset().top - 60},
            'slow');
    });

    $(".navbar-nav li a[href*='#whyWork']").click(function() {
        $('html,body').animate({
            scrollTop: $("#whyWork").offset().top - 60},
            'slow');
    });

    $(".navbar-nav li a[href*='#planning']").click(function() {
        $('html,body').animate({
            scrollTop: $("#planning").offset().top - 60},
            'slow');
    });

    $(".navbar-nav li a[href*='#projects']").click(function() {
        $('html,body').animate({
            scrollTop: $("#projects").offset().top - 60},
            'slow');
    });

    $(".navbar-nav li a[href*='#map']").click(function() {
        $('html,body').animate({
            scrollTop: $("#map").offset().top - 60},
            'slow');
    });

    $(".navbar-nav li a[href*='#contact']").click(function() {
        $('html,body').animate({
            scrollTop: $("#contact").offset().top - 60},
            'slow');
    });



    $('#testimonial').owlCarousel({
        rtl:true,
		loop:true,
		margin:0,
		nav:true,
		navText : ['<img src="images/right-arrow.png" alt="right-arrow">', '<img src="images/left-arrow.png" alt="left-arrow">'],
		items:1,
		dots:false
    });

    if ($(window).width() < 768) {
        jQuery('.mapgray-bg .flex').readall({
                showheight: 280,                         // height to show
                showrows: null,                         // rows to show (overrides showheight)
                animationspeed: 200,                    // speed of transition
                btnTextShowmore: ' קרא עוד ',           // text shown on button to show more
                btnTextShowless: ' סגור ',           // text shown on button to show less
                btnClassShowmore: 'readall-button',     // class(es) on button to show more
                btnClassShowless: 'readall-button'      // class(es) on button to show less
            });
    }
});