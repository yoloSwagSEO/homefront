$(document).ready(function(){

	// Dynamic navigation top margin

	var navMarginTop = $('nav').innerHeight() / 2 * -1;
	$('nav').css('margin-top', navMarginTop);

	// Navigation menu label

	$('nav a').each(function(){
		$(this).append('<div class="tooltip">' + $(this).data('label') + '</div>');

		$(this).on('mouseenter', function(){
			$(this).children('.tooltip').fadeIn();
		});
		$(this).on('mouseout', function(){
			$(this).children('.tooltip').fadeOut();
		});
	});

});