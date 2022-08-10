$(document).ready(function(){
    // Animate On Scroll Library
    AOS.init();

    // Video Popup
    var $videoSrc;  
    $('.video-overlay').click(function() {
        $videoSrc = $(this).data( "src" );
    });

    // when the modal is opened autoplay it  
    $('#VideoModal').on('shown.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    });

    // stop playing the youtube video when I close the modal
    $('#VideoModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc); 
    });

    var checkWidth = $(document).width();
  
    if(checkWidth <=767){
        // video slide
        $('#video-slide').owlCarousel({
            loop: true,
            margin: 10,
            dots: true,
            nav: false,
            rtl: true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive: {
                0: {
                    items:1
                }
            }
        });

        // Quote slide
        $('#quote-slide').owlCarousel({
            loop: true,
            margin: 10,
            dots: true,
            nav: false,
            rtl: true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive: {
                0: {
                    items:1
                }
            }
        });
    }
});