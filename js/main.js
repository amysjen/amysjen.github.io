$(function() {
	$('header').parallax("50%", 0.2);

	$('.arrow').on('click', function(event) {
	    var target = $( $(this).attr('href') );
	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').animate({
	            scrollTop: target.offset().top
	        }, 1000);
	    }
	});

	if($('#portfolio').length > 0){
		$('#portfolio').carousel({
		  interval: 0
		});
		$('#portfolio').on('slide.bs.carousel');
	}

});