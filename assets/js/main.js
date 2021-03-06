/**  
 *  Main Javascript file
 *   
 *  @package    Homefront Online
 *  @name       main.js
 *  @author     Brunno Pleffken Hosti <brunno.hosti@phocus.com.br>
 *  @copyright  Homefront Interactive
 *  @version    1.0.0
 */

$(document).ready(function() {

	/**
	 * Dynamic navigation top margin
	 */

	var navMarginTop = $('nav').innerHeight() / 2 * -1;
	$('nav').css('margin-top', navMarginTop);

	/**
	 * Main content custom scrollbar
	 */
	
	$('section').perfectScrollbar();

	// Navigation menu label

	$('nav a').each(function() {
		$(this).append('<div class="tooltip">' + $(this).data('label') + '</div>');

		$(this).children('img').on('mouseenter', function() {
			$(this).parent().children('.tooltip').fadeIn();
		});
		$(this).children('img').on('mouseleave', function() {
			$(this).parent().children('.tooltip').stop().fadeOut();
		});
	});

	/**
	 * Game menu on right (hamburguer icon)
	 */
	
	$('header .menu img').on('click', function() {
		$('#slideMenu').toggleClass('open');
	});
	$('#slideMenu .top img').on('click', function() {
		$('#slideMenu').toggleClass('open');
	});

	/**
	 * Redirect when clicking on a planet (in Star System View)
	 */
	
	$('.planet').each(function() {
		$(this).on('click', function() {
			var planetId = $(this).data('planet-id');
			window.location = "index.php?p=planet&action=index&id=" + planetId;
		});
	});

	/**
	 * Build scrollbars
	 */
	
	$('.progressBar').each(function() {
		var minimum  = $(this).data('min'),
		    maximum  = $(this).data('max'),
		    current  = $(this).data('current'),
		    barWidth = $(this).innerWidth(),
		    diff, percentage, pointer;

		diff = maximum - minimum;

		if(current > maximum) {
			current = maximum;
		}

		percentage = (100 / diff) * current;
		pointer = Math.floor((barWidth / diff) * current);

		$(this).append('<div class="pointer" style="left: ' + pointer + 'px"></div>');
	});

});