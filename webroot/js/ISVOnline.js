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
	 * Instructions: http://api.jquery.com/fadeTo/  http://api.jquery.com/fadeOut/
	 */
	$('.js-fade').hover(function(){
		$(this).fadeTo('slow', 0.3);
	}, function(){
		$(this).fadeTo('slow', 1);
	});
	
	/**
	 * Lightbox
	 *
	 * File: jquery.prettyPhoto.js
	 */
	$("a[rel^='prettyPhoto']").prettyPhoto({
		allowresize: true,
		default_width: 500,
	});
	
	/**
	 * InnerFade Slideshow
	 *
	 * File: jquery.innerfade.js
	 * Website: http://medienfreunde.com/lab/innerfade/
	 */
	$('.js-fadeslideshow').innerfade();
	
	/**
	 * Gallery
	 *
	 * File: galleria.js  plugins/*  themes/*
	 * Website: http://galleria.aino.se/
	 */
	$('.js-gallery').galleria({
		autoplay: true,
		transition: 'fade',
		height: 620,
		transition_speed: 1400,
		image_crop: false,
		carousel: false
	});
	 
// Fancy Accordion
/***********
 Example: 
	<div id="js-accordion">
		<!-- slide 1 -->
		<div id="slide1" class="accordionImgDiv">
			<a href="index.html" id="slideimg1" class="accordionSlideImage asyncImgLoadAccordion" title="../img/slide1.jpg"></a>
			<div class="accordionDescBack"></div>
			<div class="accordionDesc">
				<h3 class="accordionDescHeader">Slide 1</h3>
				<p>This is the description for Slide 1</p> 
			</div>                    
			<div class="slideStrip" title="../img/slide1strip.jpg"></div>
			<p class="slideDesc">Slide 1</p>  
		</div>
	</div>
***********/
	setupLoadingAsynchronousImages();
	if($("#js-accordion").length > 0)
	{
		// call this functions only if accordion is included
		setupLoadingAsynchronousImagesForAccordion();
		setupLoadingAsyncSlideStripImages();            
		setupAccordionImageSlider();
		setupAccordionControlPanel();        
		setupAccordionAutoPlay();
	}

// Accordion for the Trip Information page
/***********
 Example: 
	<div id="js-accordion_info">
		<!-- slide 1 -->
		<div id="slide1" class="accordionImgDiv_info">
			<a href="index.html" id="slideimg1" class="accordionSlideImage_info asyncImgLoadAccordion_info" title="../img/slide1.jpg"></a>
			<div class="accordionDescBack_info"></div>
			<div class="accordionDesc_info">
				<h3 class="accordionDescHeader_info">Slide 1</h3>
				<p>This is the description for Slide 1</p> 
			</div>                    
			<div class="slideStrip_info" title="../img/slide1strip.jpg"></div>
			<p class="slideDesc_info">Slide 1</p>  
		</div>
	</div>
***********/
	// this file
	if($("#js-accordion_info").length > 0)
	{
		// call this functions only if accordion is included
		setupLoadingAsynchronousImagesForAccordion_infopage();
		setupLoadingAsyncSlideStripImages_infopage();            
		setupAccordionImageSlider_infopage();
		setupAccordionAutoPlay_infopage();
	}
	
	
});