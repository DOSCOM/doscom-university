	$( document ).ready(function() {
	    var heights = $(".equal").map(function() {
	        return $(this).height();
	    }).get(),

	    maxHeight = Math.max.apply(null, heights);

	    $(".equal").height(maxHeight);

		$('#more').click(function(){
		    $('html, body').animate({
		        scrollTop: $( $(this).attr('href') ).offset().top
		    }, 500);
		    return false;
		});
	});