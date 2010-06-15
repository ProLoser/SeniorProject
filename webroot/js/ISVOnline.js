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
	 * Instructions: http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/
	 */
	$(".js-litebox").prettyPhoto();
	
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
	$('.js-gallery').PikaChoose({show_prev_next:false});
	 
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
		setupLoadingAsynchronousImagesForAccordion_tripinfo();
		setupLoadingAsyncSlideStripImages_tripinfo();            
		setupAccordionImageSlider_tripinfo();
		setupAccordionControlPanel_tripinfo(); 
		setupAccordionAutoPlay_tripinfo();
	}
	
	
});

/** TinyMCE Initialization **/
tinyMCE.init({
	// General options
	mode : "textareas",
	theme : "advanced",
	plugins : "style,layer,table,advimage,advlink,inlinepopups,preview,media,searchreplace,contextmenu,paste,fullscreen,xhtmlxtras,template,advlist",

	// Theme options
	theme_advanced_buttons1 : "code,fullscreen,preview,|,search,replace,|,attribs,removeformat,|,bold,italic,underline,strikethrough,|,sub,sup,|,justifyleft,justifycenter,justifyright,justifyfull,blockquote,outdent,indent,bullist,numlist,styleselect,formatselect",
	theme_advanced_buttons2 : "undo,redo,|,cut,copy,paste,pastetext,pasteword,|,charmap,link,unlink,anchor,image,media,|,cleanup,template,restoredraft,|,tablecontrols,|,hr,visualaid",
	theme_advanced_buttons3 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	theme_advanced_resizing : true,

	// Example content CSS (should be your site CSS)
	content_css : "../css/layout.css",

	// Drop lists for link/image/media/template dialogs
	template_external_list_url : "lists/template_list.js",
	external_link_list_url : "lists/link_list.js",
	external_image_list_url : "lists/image_list.js",
	media_external_list_url : "lists/media_list.js",

	// Style formats
	style_formats : [
		{title : 'Slide Right', classes : 'right'},
		{title : 'Slide Left', classes : 'left'},
		{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
		{title : 'Example 1', inline : 'span', classes : 'example1'},
		{title : 'Example 2', inline : 'span', classes : 'example2'},
		{title : 'Table styles'},
		{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
	],

	// Replace values for the template plugin
	template_replace_values : {
		username : "Some User",
		staffid : "991234"
	}
});