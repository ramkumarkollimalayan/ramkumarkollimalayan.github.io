
$(function() {
    AOS.init();
    
    $('.navbar-nav>li>a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });

    $('a[href*="#"]').bind('click', function(e) {
        e.preventDefault();

        var target = $(this).attr("href"); 
        $('html, body').animate({
                scrollTop: $(target).offset().top
        }, 600, function() {
                location.hash = target;
        });

        return false;
    });

    $(window).scroll(function() {
        var scrollDistance = $(window).scrollTop();

        $('section').each(function(i) {
            if ($(this).position().top <= scrollDistance) {
                $('.nav-item.active').removeClass('active');
                $('.nav-item').eq(i).addClass('active');
            }
        });
    }).scroll();
});