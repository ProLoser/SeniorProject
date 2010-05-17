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
  // Example: <ul id="js-slideshow" class="slides">
  $("#js-slideshow").slideView();
  
 
});