/**********************************
 ACCORDION - TRIP INFORMATION PAGE
**********************************/

/***************************************
    ASYNCHRONOUS IMAGE LOADING CODE
****************************************/

// For all object with class "asyncImaLoad" (loader), function read
// image path from title attribute, create new Image object,
// next assign image from path to Image object and 
// append it to loader 
function setupLoadingAsynchronousImages()
{
    // for each object with class "asyncImgLoad"
    $('.asyncImgLoad').each(
        function()
        {   
            // save handle to loader - caintainer which we gona insert loaded image    
            var loader = $(this);
            // get image path from loader title attribute
            var imagePath = loader.attr('title');
            // create new image object
            var img = new Image();
            // set opacity for image to maximum
            // value 0.0 means completly transparent
            $(img).css("opacity", "0.0")
            // next we set function wich gona be caled then
            // image load is finished  
                .load(
                    function() 
                    {
                        // insert loaded image to loader object 
                        // and remove unnecessary title attribute
                        loader.append(this).removeAttr('title');
                        // for inserted image we set margin to zero
                        // opacity to max and fire up 500ms opacity animation 
                        $(this)
                            .css("margin", "0px")
                            .css("opacity", "0.0")
                            .animate({opacity: 1.0}, 500,
                                function()
                                {
                                    // after animation we remove loader background image 
                                    loader.css("background-image", "none");
                                }
                            );
                    }
                // set new value for attribute src - this means: load image from imagePath    
                ).attr('src', imagePath);                        
        }
    );
} // end of function setupLoadingAsynchronousImages


/***
The difference betweent he 'accordion_info' plugin and the 'accordion' plugin is that the
accordion_info plugin is made for a shorter caption which appears within the accordion
itself.  This is in contrast to the 'accordion' plugin which allows for a longer caption
which appears below the accordion.  This also takes out the 'controls'.
***/
 
// default width of accordion for this template is set to 960 pixels,
// this value is hardcoded and must be equal to accordion width coded in
// js-accordion_info CSS style (file: accordion_main.css)
var ACCORDION_WIDTH = 600;
// this variable determine the width of div then it is draw aside
var ACCORDION_DRAW_ASIDE_WIDTH = 50;
// slide function, the default is "liner" which is implemented in jQuery,
// it's not looking good, so we use special easing pluging and method "jQuery EasIng v1.1.2"
var ACCORDION_EASING_METHOD = "easeOutCirc";
// slide time
var ACCORDION_SLIDE_TIME = 650;
// collection of objects which describe divs included in accordion image slider,
// every described div have included one main image, and some addiotonal images and
// elements whith other informations needed for main image, we pack objects into an array
var g_slidedDivs = null;
var g_hoveredSlideIndex = null;
function setupAccordionImageSlider_infopage()
{
    // turn off displaying border-left for first div holding image in accordion
    $("#js-accordion_info").find(".accordionImgDiv_info:first").css("border-left", "0px");
    
    // get list of all slided divs in slider
    var slidedDivsList = $("#js-accordion_info .accordionImgDiv_info");
    // collect information on every div in to an global array
    g_slidedDivs = new Array;
    var firstDiv = $("#js-accordion_info .accordionImgDiv_info:first");
    for(var i = 0; i < slidedDivsList.length; i++)
    {
        var obj = new Object(); 
        obj.name = "#" + $(firstDiv).attr('id'); 
        obj.dest = 0;
        obj.out = 0;
        g_slidedDivs.push(obj); 

        firstDiv = $(firstDiv).next(".accordionImgDiv_info");
    }
                 
    // calculating rib width based on accordion containter width divided by slides number in accordion
    var ribOutWidth = 0;
    // calculate width of the rib
    ribOutWidth = ACCORDION_WIDTH / g_slidedDivs.length;
    
    // then the page is load we must set the left margin of every div in accordion
    // distance between divs a equal to rib width so the divs are placed equally
    for(var i = 0; i < g_slidedDivs.length; i++)
    {
        // set left margin
        $(g_slidedDivs[i].name).css("margin-left", (i*ribOutWidth)+"px");
        // addiotinaly we set the dest member to the same value
        g_slidedDivs[i].dest = i*ribOutWidth;
    }

    // we set the acction for hover the accordion container,
    // when the mouse is moved on, there is no action taken,
    // when mouse is moved from we distribyte all slided divs in accordion
    // equally on accordion space
    $("#js-accordion_info").hover(
        function()
        {   
            // stop the auto play accordion image slider
            if(true == g_sliderAutoPlay)
            {
                clearTimeout(g_sliderTimerAutoPlay);
            }
            // if slider is not fully loaded
            if(g_loadedStripCount < g_slidedDivs.length)
            {
                return;
            }            
            // hide slide strip desc
            $("#js-accordion_info .accordionImgDiv_info").find(".slideDesc_info").stop().animate({opacity: 0.0}, 150);
        },
        function()
        {   
            // if slider is not fully loaded 
            if(g_loadedStripCount < g_slidedDivs.length)
            {
                return;
            }
            
            mouseOutAccorOnAll(null);        
            for(var i = 0; i < g_slidedDivs.length; i++)
            {
                // if div is currently moved we stop the animation
                // and set new animation for left margin
                $(g_slidedDivs[i].name).stop()
                    .animate({marginLeft: (i*ribOutWidth)+"px"}, {duration: 900, easing: ACCORDION_EASING_METHOD});
                // we set the destination member to the same value
                g_slidedDivs[i].dest = i*ribOutWidth;
                // show strip desc
                $(g_slidedDivs[i].name).find(".slideDesc_info").stop().animate({opacity: 1.0}, 1200);
            }
            // fire up auto play for slider
            if(true == g_sliderAutoPlay)
            {
                clearTimeout(g_sliderTimerAutoPlay);
                mouseOutAccorOnAll(null);
                g_sliderTimerAutoPlay = setTimeout(accordionPlay, g_sliderTimerInterval);
            }
        }
    );                                                    

    // setting hover action for every div of class accordionImgDiv_info in accordion,
    // when user move mause on div, we must to draw aside all dive except the hovered
    $(".accordionImgDiv_info").hover(
        function()
        {   
            // stop the auto play accordion image slider
            if(true == g_sliderAutoPlay)
            {
                clearTimeout(g_sliderTimerAutoPlay);
            }        
            // if slider is not fully loaded we return
            if(g_loadedStripCount < g_slidedDivs.length)
            {
                return;
            }        
        
            // save in variable id of hovered element
            var divID = ("#" + $(this).attr('id'));
            // fade out all divs with excluding hovered div
            mouseOutAccorOnAll(divID);

            g_hoveredSlideIndex = $("#js-accordion_info .accordionImgDiv_info").index(this);    
            
            var context = $(this)[0];
            // stop and set new animation of main image opacity
            $(".accordionSlideImage_info", context).find("img").stop().animate({opacity: 1.0}, 400); 
            // stop and set new animation of image description background div
            $(".accordionDescBack_info", context).stop().animate({bottom: 0, opacity: 0.8}, 1000);
            // stop and set new animation of image description div
            $(".accordionDesc_info", context).stop().animate({bottom: 0, opacity: 1.0}, 1000);
            $(".slideStrip_info", context).stop().animate({opacity: 0.0}, 200, ACCORDION_EASING_METHOD); 
            
            g_slidedDivs[g_hoveredSlideIndex].out = 0;
            // draw aside all divs
            setMoveForAccordionDivs(g_hoveredSlideIndex);
        }, 
        function()
        {
            if(g_loadedStripCount < g_slidedDivs.length)
            {
                return;
            }        
        
            g_hoveredSlideIndex = null;
            
            // save in variable id of hovered element
            var divID = ("#" + $(this).attr('id'));
            // now we need to find the index of hovered div,
            // so we searching it name in array g_slidedDivs, when
            // the named match we save index and break loop  
            var index = 0;
            for(var i = 0; i < g_slidedDivs.length; i++)
            {
                if(divID == g_slidedDivs[i].name)
                {        
                    index = i;
                    break;
                }
            }
            
            if(g_slidedDivs[index].out != 1)
            {
                g_slidedDivs[index].out = 1;            
                mouseOutAccor(this);
            }
        }
    );
} // end of function setupAccordionImageSlider_infopage 

// Function set value of left margin for every slided div in accordion
// @param[in] index - index of ohovered div with class accordionImgDiv_info 
function setMoveForAccordionDivs(index)
{
    // for every slided div we make the same
    for(var i = 0; i < g_slidedDivs.length; i++)
    {
        var context = $(g_slidedDivs[i].name)[0];
        var object = $(g_slidedDivs[i].name);
        $(".slideDesc_info", context).stop().animate({opacity: 0.0}, 150);
        // if div lie on left we move it on left
        if(i < index)
        {
            // calculate new margin, this equal to calculate new position of div
            var newMargin = (i*ACCORDION_DRAW_ASIDE_WIDTH);
            // if new margin is diffrent from div destination margin the animation is set    
            if(g_slidedDivs[i].dest != newMargin)
            {
                // first we stop the old animation
                object.stop();
                // animation time
                var animTime = ACCORDION_SLIDE_TIME;
                // save new margin 
                g_slidedDivs[i].dest = newMargin;
                // set new animation
                object.animate(
                    {marginLeft: newMargin+"px"}, 
                    {duration: animTime, easing: ACCORDION_EASING_METHOD});
            }
            // go to next iteraction of loop
            continue;
        }
        // if div is hovered, we move it max to the left, the code is identical,
        // but is separated for future to add maybe some special actions
        if(index == i)
        {
            // calculate new margin
            var newMargin = (i*ACCORDION_DRAW_ASIDE_WIDTH);
            // if new margin is diffrent from div destination margin the animation is set 
            if(g_slidedDivs[i].dest != newMargin) 
            {   
                // first we stop old animation
                object.stop();
                // animation time
                var animTime = ACCORDION_SLIDE_TIME;
                // save new margin           
                g_slidedDivs[i].dest = newMargin;
                // set new animation
                object.animate(
                    {marginLeft: newMargin+"px"}, 
                    {duration: animTime, easing: ACCORDION_EASING_METHOD});
            }
            // go to next iteraction of loop   
            continue;
        }
        // if div lie on right we move it on right, we must calculate
        // margin from right border of accordion container   
        if(i > index)
        {
            // calculate new margin 
            var newMargin = (ACCORDION_WIDTH - ((g_slidedDivs.length - i) * ACCORDION_DRAW_ASIDE_WIDTH));
            // if new margin is diffrent from div destination margin the animation is set 
            if(g_slidedDivs[i].dest != newMargin) 
            {   
                // first we stop old animation   
                object.stop();
                // animation time    
                var animTime = ACCORDION_SLIDE_TIME;
                // save new margin            
                g_slidedDivs[i].dest = newMargin;
                // set new animation   
                object.animate({"marginLeft": newMargin+"px"}, {duration: animTime,
                    easing: ACCORDION_EASING_METHOD});
            }
            // go to next iteraction of loop 
            continue;
        }
    }
} // end of function setMoveForAccordionDivs  


var g_actualSlideImage = 0;
// auto play timer handle for accordion image slider
var g_sliderTimerAutoPlay = null;
// slider timer interval
var g_sliderTimerInterval = 4500;
// is accordion auto play on/off
var g_sliderAutoPlay = true;
// if have true, the new loop of slider is starting
var g_sliderNewLoop = false;
// true if new slider loop gona be start
var g_setBackwardBtnOnLast = false;

function accordionPlay()
{
    if(g_loadedStripCount < g_slidedDivs.length)
    {
        // fire up slider
        if(true == g_sliderAutoPlay)
        {
            g_sliderTimerAutoPlay = setTimeout(accordionPlay, g_sliderTimerInterval);
        }      
        return;
    }      

    var timeOut = g_sliderTimerInterval;
 
    if(BACKWARD == g_lastSlideMoveDirection)
    {
        g_actualSlideImage++;
        if(g_actualSlideImage >= g_slidedDivs.length)
        {
            g_actualSlideImage = 0;
            g_sliderNewLoop = true;
        } 
    }
    g_lastSlideMoveDirection = FORWARD;
    
    g_setBackwardBtnOnLast = false;
    if(true == g_sliderNewLoop)
    {
        ribOutWidth = ACCORDION_WIDTH / g_slidedDivs.length;
        mouseOutAccorOnAll(null);
       
        for(var i = 0; i < g_slidedDivs.length; i++)
        {
            // if div is currently moved we stop the animation
            // and set new animation for left margin
            $(g_slidedDivs[i].name).stop()
                .animate({marginLeft: (i*ribOutWidth)+"px"}, {duration: 900, easing: ACCORDION_EASING_METHOD});
            // we set the destination member to the same value
            g_slidedDivs[i].dest = i*ribOutWidth;
            $(g_slidedDivs[i].name).find(".slideDesc_info").stop().animate({opacity: 1.0}, 2000); 
        }
        timeOut = g_sliderTimerInterval * 2;
        g_sliderNewLoop = false;
        // for backward button, we set the index to last element
        g_setBackwardBtnOnLast = true;
        // fire up slider
        g_sliderTimerAutoPlay = setTimeout(accordionPlay, timeOut); 
        return;
    }
    
    mouseOutAccorOnAll(null); 
    mouseOnAccor(g_slidedDivs[g_actualSlideImage].name);
    
    g_actualSlideImage++;
    if(g_actualSlideImage >= g_slidedDivs.length)
    {
        g_actualSlideImage = 0;
        g_sliderNewLoop = true;   
    }
    
    // fire up slider
    if(true == g_sliderAutoPlay)
    {
        g_sliderTimerAutoPlay = setTimeout(accordionPlay, g_sliderTimerInterval);
    }      
    
} // end of function accordionPlay

function setupAccordionAutoPlay_infopage()
{
    // fire up auto play for accordion image slider
    if(true == g_sliderAutoPlay)
    {
        g_sliderTimerAutoPlay = setTimeout(accordionPlay, g_sliderTimerInterval);
    }
} // end of function setupAccordionAutoPlay_infopage

function mouseOnAccor(_this)
{
    // now we need to find the index of hovered div,
    // so we searching it name in array g_slidedDivs, when
    // the named match we save index and break loop  
    var index = 0;
    for(var i = 0; i < g_slidedDivs.length; i++)
    {
        if(("#" + $(_this).attr('id')) == g_slidedDivs[i].name)
        {        
            index = i;
            break;
        }
    }
    g_slidedDivs[index].out = 0;

    // stop and set new animation of main image opacity
    $(_this).find(".accordionSlideImage_info").find("img").stop().animate({opacity: 1.0}, 400); 
    // stop and set new animation of image description background div
    $(_this).find(".accordionDescBack_info").stop().animate({bottom: 0, opacity: 0.8}, 1000);
    // stop and set new animation of image description div
    $(_this).find(".accordionDesc_info").stop().animate({bottom: 0, opacity: 1.0}, 1000);
    $(_this).find(".slideStrip_info").stop().animate({opacity: 0.0}, 300);
  
    // draw aside all divs
    setMoveForAccordionDivs(index);
} // end of function mouseOnAccor

function mouseOutAccor(_this)
{
    var context = $('#js-accordion_info')[0];
    // stop and set new animation of main image opacity
    $(_this, context).find(".accordionSlideImage_info").find("img").stop().animate({opacity: 0.0}, 800
    ,function(){$(_this, context).find(".slideStrip_info").stop().animate({opacity: 1.0}, 600);}
    );
    // stop and set new animation of image description background div   
    $(_this, context).find(".accordionDescBack_info").stop().animate({bottom: -70, opacity: 0}, 300);
    // stop and set new animation of image description div   
    $(_this, context).find(".accordionDesc_info").stop().animate({bottom: -70, opacity: 0}, 300);
    
} // end of function mouseOutAccor

function mouseOutAccorOnAll(excludedID)
{
    for(var j = 0; j < g_slidedDivs.length; j++)
    {
       if(excludedID != null)
       {
         if(excludedID == g_slidedDivs[j].name)
         {
            continue;
         }
       }
       if(g_slidedDivs[j].out != 1)
       {
            g_slidedDivs[j].out = 1;
            mouseOutAccor(g_slidedDivs[j].name);
       }
    } 
} // end of function mouseOutAccorOnAll


/**********************************
    ACCORDION CONTROL PANEL CODE
***********************************/
// true - forward, false - backward
var FORWARD = true;
var BACKWARD = false;
var g_lastSlideMoveDirection = FORWARD;
 
function setupAccordionControlPanel_infopage()
{
    // fadeout description text
    $("#accorControlBtnDesc").fadeTo(0, 0.0);

    // bind function to accordion control panel play button called then button is clicked 
    $("#accorPlayBtn").click(
        function()
        {
            // change state of accordion slider auto play
            g_sliderAutoPlay = !g_sliderAutoPlay;
            // if auto play is off, we need to clear actual timer,
            // in other case, if slider is on, we set new timer function call
            if(false == g_sliderAutoPlay)
            {
                clearTimeout(g_sliderTimerAutoPlay);
                
                mouseOutAccorOnAll(null);
                var ribOutWidth = ACCORDION_WIDTH / g_slidedDivs.length; 
                for(var i = 0; i < g_slidedDivs.length; i++)
                {
                    // if div is currently moved we stop the animation
                    // and set new animation for left margin
                    $(g_slidedDivs[i].name).stop()                    
                        .animate({marginLeft: (i*ribOutWidth)+"px"}, {duration: 900, easing: ACCORDION_EASING_METHOD});
                    // we set the destination member to the same value
                    g_slidedDivs[i].dest = i*ribOutWidth;
                    $(g_slidedDivs[i].name).find(".slideDesc_info").stop().animate({opacity: 1.0}, 2000); 
                }                
            } else
            {
                 g_sliderTimerAutoPlay = setTimeout(accordionPlay, g_sliderTimerInterval); 
            }
            if(true == g_sliderAutoPlay)
            {
                 $(this).attr("src", "img/slider/accordion/control/pause_hover.png");
            } else
            {
                  $(this).attr("src", "img/slider/accordion/control/play_hover.png");
            }
        }
    );

    // bind function to accordion control panel play button called then button is hovered by user
    $("#accorPlayBtn").hover(
        function ()
        {
            // set text and slow fade to 100%
            $("#accorControlBtnDesc").text("turn off/on slider auto play").fadeTo("slow", 1.0);
           
            if(false == g_sliderAutoPlay)
            {
                $(this).attr("src", "img/slider/accordion/control/play_hover.png");
            } else
            {
                $(this).attr("src", "img/slider/accordion/control/pause_hover.png");
            }
        },
        function ()
        {
            if(false == g_sliderAutoPlay)
            {
                $(this).attr("src", "img/slider/accordion/control/play.png");
            } else
            {
                $(this).attr("src", "img/slider/accordion/control/pause.png")
            }
            $("#accorControlBtnDesc").stop().fadeTo(0, 0.0);  
        }
    );
    
    // bind function to accordion control panel backward button called then button is hovered by user
    $("#accorBackBtn").hover(
        function ()
        {
           // set text and slow fade to 100%  
           $("#accorControlBtnDesc").text("previous slide").fadeTo("slow", 1.0); 
           $(this).attr("src", "img/slider/accordion/control/back_hover.png");
        },
        function ()
        {
            $(this).attr("src", "img/slider/accordion/control/back.png");
            $("#accorControlBtnDesc").stop().fadeTo(0, 0.0); 
        }
    );
    
    // bind function to accordion control panel backward button called then button is clicked
    $("#accorBackBtn").click(
        function()
        {
            clearTimeout(g_sliderTimerAutoPlay);
            if(FORWARD == g_lastSlideMoveDirection)
            {
               g_actualSlideImage--;
            }
            g_lastSlideMoveDirection = BACKWARD;
            
            if(false == g_setBackwardBtnOnLast)
            {
                mouseOutAccorOnAll(null);
                g_actualSlideImage--;
                
                // if new loop is in progress we must stop it
                if(true == g_sliderNewLoop)
                {
                    g_sliderNewLoop = false;
                }
                
                if(0 > g_actualSlideImage)
                {
                    // if slider is on last slided div in this moment g_actualSlideImage 
                    // value is -2 becouse above we have two decreasing operations
                    if(g_actualSlideImage == -2)
                    {
                        // so in this situation we must set slider on the next to last slided div
                        g_actualSlideImage = g_slidedDivs.length - 2;
                    } else
                    {
                        // in normal situation we move one slide back
                        g_actualSlideImage = g_slidedDivs.length - 1;
                    }
                }
                mouseOnAccor(g_slidedDivs[g_actualSlideImage].name);
            } else
            {
                mouseOutAccorOnAll(null);
                g_actualSlideImage = g_slidedDivs.length - 1;                                               
                mouseOnAccor(g_slidedDivs[g_actualSlideImage].name);
                g_setBackwardBtnOnLast = false;               
            }
            // fire up slider
            if(true == g_sliderAutoPlay)
            {
                g_sliderTimerAutoPlay = setTimeout(accordionPlay, g_sliderTimerInterval); 
            }
        }
    );     
    
    // bind function to accordion control panel forward button called then button is hovered by user
    $("#accorForwardBtn").hover(
        function ()
        {
            // set text and slow fade to 100% 
            $("#accorControlBtnDesc").text("next slide").fadeTo("slow", 1.0);
            $(this).attr("src", "img/slider/accordion/control/forward_hover.png");
        },
        function ()
        {
            $(this).attr("src", "img/slider/accordion/control/forward.png");
            $("#accorControlBtnDesc").stop().fadeTo(0, 0.0);   
        }
    ); 
    
    // bind function to accordion control panel forward button called then button is clicked
    $("#accorForwardBtn").click(
        function()
        {
            clearTimeout(g_sliderTimerAutoPlay);
            g_sliderNewLoop = false; 
            
            if(BACKWARD == g_lastSlideMoveDirection)
            {
                 g_actualSlideImage++;
                 if(g_actualSlideImage >= g_slidedDivs.length)
                 {
                    g_actualSlideImage = 0;
                    g_sliderNewLoop = true;
                 }                  
            }
            g_lastSlideMoveDirection = FORWARD;
            mouseOutAccorOnAll(null);
            mouseOnAccor(g_slidedDivs[g_actualSlideImage].name);
    
            g_actualSlideImage++;
            if(g_actualSlideImage >= g_slidedDivs.length)
            {
                g_actualSlideImage = 0;
                g_sliderNewLoop = true;
            }
            // fire up slider
            if(true == g_sliderAutoPlay)
            {
                g_sliderTimerAutoPlay = setTimeout(accordionPlay, g_sliderTimerInterval); 
            }
        }
    );       

} // end of function setupAccordionControlPanel_infopage 


/*********************************************
    ASYNCHRONOUS IMAGE LOADING FOR ACCORDION
**********************************************/
g_loadedSlideCount = 0;
g_imgList = null;

function checkAccordionLoading()
{
    if(g_loadedSlideCount < g_imgList.length)
    {  
       setupLoadingAsynchronousImagesForAccordion_infopage();
    }
} // end of function checkAccordionLoading 

function setupLoadingAsynchronousImagesForAccordion_infopage()
{
    if(g_imgList == null)
    {
        // get list of all slided divs in slider
        var imgDivsList = $("#js-accordion_info .asyncImgLoadAccordion_info");
        // collect information on every div in to an global array
         g_imgList = new Array;
         var firstDiv = $("#js-accordion_info .accordionImgDiv_info:first");
         var imgDiv = $(firstDiv).find(".asyncImgLoadAccordion_info");
         for(var i = 0; i < imgDivsList.length; i++)
         {
            var obj = new Object(); 
            obj.id = "#" + $(imgDiv).attr('id'); 
            g_imgList.push(obj); 

            firstDiv = $(firstDiv).next(".accordionImgDiv_info");    
            imgDiv = $(firstDiv).find(".asyncImgLoadAccordion_info");
         }
    }
        
    if(g_loadedSlideCount < g_imgList.length)
    {  
       g_loadedSlideCount++;
       loadAccordionImg(g_imgList[g_loadedSlideCount-1].id, g_loadedSlideCount-1);
       setTimeout(setupLoadingAsynchronousImagesForAccordion_infopage, 500);
    }
        
        function loadAccordionImg(id, _index)
        {   
            // save handle to loader - caintainer which we gona insert loaded image    
            var loader = $(id);
            // get image path from loader title attribute
            var imagePath = loader.attr('title');
            // create new image object
            var img = new Image();
            // set opacity for image to maximum
            // value 0.0 means completly transparent
            $(img).css("opacity", "0.0")
            // nex we set function wchig goba be caled then
            // image load is finished  
                .load(
                    function() 
                    {
                        // insert loaded image to loader object 
                        // and remove unnecessary title attribute
                        loader.append(this).removeAttr('title');
                        // for inserted image we set margin to zero
                        // opacity to max and fire up 500ms opacity animation 
                        loader.css("background-image", "none");
                        $(this)
                            .css("margin", "0px")
                            .css("opacity", "0.0");
                        
                        if(_index == g_hoveredSlideIndex)
                        {
                            $(this).animate({opacity: 1.0}, 500);
                        }                        
                            
                    }
                // set new value for attribute src - this means: load image from imagePath    
                ).attr('src', imagePath);                        
        } 
        
           
} // end of function setupLoadingAsynchronousImagesForAccordion_infopage 

var g_loadedStripCount = 0;
var g_stripList = null;
function setupLoadingAsyncSlideStripImages_infopage()
{
    if(g_stripList == null)
    {
        // get list of all slided divs in slider
        var imgDivsList = $("#js-accordion_info .slideStrip_info");
        // collect information on every div in to an global array
         g_stripList = new Array;
         var firstDiv = $("#js-accordion_info .accordionImgDiv_info:first");
         var imgDiv = $(firstDiv).find(".slideStrip_info");
         for(var i = 0; i < imgDivsList.length; i++)
         {
            var obj = new Object(); 
            obj.id = imgDiv; 
            g_stripList.push(obj); 

            firstDiv = $(firstDiv).next(".accordionImgDiv_info");    
            imgDiv = $(firstDiv).find(".slideStrip_info");
         }
    }
        
    if(g_loadedStripCount < g_stripList.length)
    {  
       
       loadStripImg(g_stripList[g_loadedStripCount].id, g_loadedStripCount);
       
    } else
    {
        clearTimeout(g_sliderTimerAutoPlay);
        g_sliderTimerAutoPlay = setTimeout(accordionPlay, g_sliderTimerInterval);
    }
        
        function loadStripImg(id, _index)
        {   
            // save handle to loader - caintainer which we gona insert loaded image    
            var loader = $(id);
            // get image path from loader title attribute
            var imagePath = loader.attr('title');
            // create new image object
            var img = new Image();
            // set opacity for image to maximum
            // value 0.0 means completly transparent
            $(img).css("opacity", "0.0")
            // nex we set function wchig goba be caled then
            // image load is finished  
                .load(
                    function() 
                    {
                        // insert loaded image to loader object 
                        // and remove unnecessary title attribute
                        loader.append(this).removeAttr('title');
                        // for inserted image we set margin to zero
                        // opacity to max and fire up 500ms opacity animation 
                        g_loadedStripCount++;
                        $(this)
                            .css("margin", "0px")
                            .css("opacity", "0.0")
                            .animate({opacity: 1.0}, 400, function()
                            {
                                loader.css("background-image", "none"); 
                                setTimeout(setupLoadingAsyncSlideStripImages_infopage, 20); 
                            });                            
                    }
                // set new value for attribute src - this means: load image from imagePath    
                ).attr('src', imagePath);                        
        } 
} // end of function setupLoadingAsyncSlideStripImages_infopage 

