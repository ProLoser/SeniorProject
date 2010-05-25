// Plugins for ISVOnline
$(document).ready(function () {

if ($.browser.msie && $.browser.version < 7) return; // Don't execute code if it's IE6 or below cause it doesn't support it.

// Fade Effect
// Example: <img src="image.jpg" class="js-fade" />
  $(".js-fade").fadeTo(1, 1);
  $(".js-fade").hover(
    function () {
      $(this).fadeTo("fast", 0.33);
    },
    function () {
      $(this).fadeTo("slow", 1);
    }
  );
  
// Slideshow
/***********
 Example: 
 	<div id="js-slideshow">                        
		<!-- slide 1 --> 
		<a href="index.html" class="slide asyncImgLoad" title="../img/slide1.jpg"> 
			<span class="desc">
				This is my caption for Slide 1.
			</span>
		</a> 
		<div class="btnContainer"> 
			<div class="btn">1</div> 
		</div>  
	</div> 
***********/
	setupSlideshow();

// Accordion for the OAP page
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
	// this file
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
	setupLoadingAsynchronousImages();
	// this file
	if($("#js-accordion_info").length > 0)
	{
		// call this functions only if accordion is included
		setupLoadingAsynchronousImagesForAccordion();
		setupLoadingAsyncSlideStripImages();            
		setupAccordionImageSlider();
		setupAccordionControlPanel();        
		setupAccordionAutoPlay();
	}
	
// Gallery
/********
 Example: 
	<div id="js-gallery" class="twocolumn">
		<!-- Page Gallery -->
		<div class="slideshowgallery">
		<div id="main_image"></div>
		<ul class="gallery_unstyled">
			<li class="active"><img src="..img/image1.jpg" title="Image 1" alt="Image 1" longdesc="This is the caption for image 1." /></li>
			<li><img src="..img/image2.jpg" title="Image 2" alt="Image 2" longdesc="This is the caption for image 2." /></li>
		</ul>
		</div>
	</div>
********/
var INTERVAL = 6000;
	var slideshow_timer = null;
	var is_sliding = null;

	function slideShow()
	{
		is_sliding = true; 
		$.galleria.next();
		is_sliding = false;
	}
	
	$('.gallery_unstyled').addClass('gallery'); // adds new class name to maintain degradability
	
	$('ul.gallery').galleria({
		history   : false, // activates the history object for bookmarking, back-button etc.
		clickNext : true, // helper for making the image clickable
		insert    : '#main_image', // the containing selector for our main image
		onImage   : function(image,caption,thumb) { // let's add some image effects for demonstration purposes
			
			// fade in the image and caption
			image.css('display','none').fadeIn(1000);
			caption.css('display','none').fadeIn(1000);
			
			// fetch the thumbnail container
			var _li = thumb.parents('li');
			
			// fade out inactive thumbnail
			_li.siblings().children('img.selected').fadeTo(500,0.3);
			
			// fade in active thumbnail
			thumb.fadeTo('fast',1).addClass('selected');
			
			// add a title for the clickable image
			//image.attr('title','Next image >>');
			

			
			if (is_sliding== null)
			{
				slideshow_timer = window.setInterval(slideShow, INTERVAL);
				is_sliding = false;
			} else if (!is_sliding)
			{
				window.clearInterval(slideshow_timer);
				slideshow_timer = null;
			}
		},
		onThumb : function(thumb) { // thumbnail effects goes here
			
			// fetch the thumbnail container
			var _li = thumb.parents('li');
			
			// if thumbnail is active, fade all the way.
			var _fadeTo = _li.is('.active') ? '1' : '0.3';
			
			// fade in the thumbnail when finnished loading
			thumb.css({display:'none',opacity:_fadeTo}).fadeIn(1500);
			
			// hover effects
			thumb.hover(
				function() { thumb.fadeTo('fast',1); },
				function() { _li.not('.active').children('img').fadeTo('fast',0.3); } // don't fade out if the parent is active
			)
		}
	});
	
// Lightbox
// Example: <a rel="prettyPhoto[gallery]" href="../img/image.jpg">
$("a[rel^='prettyPhoto']").prettyPhoto();

// Sexy Slideshow
/*********
 Example:
	<div id="sexy_slideshow">
         <img src="../img/slide1.jpg" alt="This is the caption for slide 1."/>
	</div>
	
	<div id="navigation"></div>
    <div id="control"></div>
*********/
$("#sexy_slideshow").SexySlider({
        width      : 600,
        height     : 350,
        delay      : 3000,
        strips     : 15,
        autopause  : true,
        navigation : '#navigation',
        control    : '#control',
        effect      : 'random'
    });
});