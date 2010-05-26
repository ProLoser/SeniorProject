// Setup Plugins for ISVOnline
$(document).ready(function () {

	/**
	 * Numbered Slideshow
	 * 
	 * File: jquery.slideshow.lite-0.5.3.js
	 * Website: http://www.beyondcoding.com/2009/08/04/release-jquery-plugin-slideshow-lite/
	 */
	$('.js-slideshow').slideshow();
	
	/**
	 * Fade in and out upon hover
	 *
	 * File: jquery-1.4.2.min.js
	 * Instructions: http://api.jquery.com/fadeTo/ http://api.jquery.com/fadeOut/
	 */
	$('.js-fade').hover(function(){
		$(this).fadeTo('slow', 0.5);
	}, function(){
		$(this).fadeIn('slow');
	});

});