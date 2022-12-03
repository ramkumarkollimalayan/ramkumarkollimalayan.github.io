$(document).ready(function(){
    $('#sec_seven_slide').owlCarousel({
        rtl: true,
		loop: true,
		margin: 10,
		nav: true,
		navText: ['<img src="images/arrow-right.png" alt="right-arrow">', '<img src="images/arrow-left.png" alt="left-arrow">'],
		items: 3,
		dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive : {
            0 : {
                items: 1
            },
            768 : {
                items: 2
            },
            992 : {
                items: 3
            }
        }
    });
});