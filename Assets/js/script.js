

$('#myCarousel').carousel();
		$(document).ready(function () {

		    $(window).scroll(function () {
		        if ($(this).scrollTop() > 2500) {
		            $('.scrollup').fadeIn();
		        } else {
		            $('.scrollup').fadeOut();
		        }
		    });

		    $('.scrollup').click(function () {
		        $("html, body").animate({
		            scrollTop: 0
		        }, 600);
		        return false;
		    });

		});
    $('.nav a').on('click', function(){ 
        if($('.navbar-toggle').css('display') !='none'){
            $(".navbar-toggle").trigger( "click" );
        }
    });
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })