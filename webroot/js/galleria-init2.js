	$(document).ready(function(){
	
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
			clickNext : false, // helper for making the image clickable
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
	});