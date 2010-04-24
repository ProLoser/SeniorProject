// JavaScript Document for Fade in Out effect

$(document).ready(function () {

if ($.browser.msie && $.browser.version < 7) return; // Don't execute code if it's IE6 or below cause it doesn't support it.

  $(".fade").fadeTo(1, 1);
  $(".fade").hover(
    function () {
      $(this).fadeTo("fast", 0.33);
    },
    function () {
      $(this).fadeTo("slow", 1);
    }
  );
  
  $(".fadeaccordion").fadeTo(1, 0.8);
  $(".fadeaccordion").hover(
    function () {
      $(this).fadeTo("fast", 1);
    },
    function () {
      $(this).fadeTo("fast", 0.8);
    }
  );
  
  $(".overlay").fadeTo(1, 0.5);

  $(".captionfade").fadeTo(1, 0.8);
  $(".captionfade").hover(
    function () {
      $(this).fadeTo("fast", 0.9);
    },
    function () {
      $(this).fadeTo("slow", 0.8);
    }
  );
  
  $(".invfade").fadeTo(1, 0.5);
  $(".invfade").hover(
    function () {
      $(this).fadeTo("fast", 1);
    },
    function () {
      $(this).fadeTo("slow", 0.5);
    }
  );
  
  $(".photofade").fadeTo(1, 1);
  $(".photofade").hover(
    function () {
      $(this).fadeTo("fast", 0.88);
    },
    function () {
      $(this).fadeTo("fast", 1);
    }
  );
  
});
