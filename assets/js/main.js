/**  
 *  Main Javascript file
 *   
 *  @package    Homefront Online
 *  @name       main.js
 *  @author     Brunno Pleffken Hosti <brunno.hosti@phocus.com.br>
 *  @copyright  Homefront Interactive
 *  @version    1.0.0
 *  @since      23/07/2014
 */

$(document).ready(function(){

	// Dynamic navigation top margin

	var navMarginTop = $('nav').innerHeight() / 2 * -1;
	$('nav').css('margin-top', navMarginTop);

	// Navigation menu label

	$('nav a').each(function(){
		$(this).append('<div class="tooltip">' + $(this).data('label') + '</div>');

		$(this).children('img').on('mouseenter', function(){
			$(this).parent().children('.tooltip').fadeIn();
		});
		$(this).children('img').on('mouseleave', function(){
			$(this).parent().children('.tooltip').stop().fadeOut();
		});
	});

	// Dynamic content height
	
	var contentHeight = $('body').innerHeight();
	console.log(contentHeight);

});