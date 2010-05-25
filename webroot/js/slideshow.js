/**********
 SLIDESHOW
**********/

/*************************************
    BROWSER DETECTING CODE
**************************************/
var g_browserDetect = {
    init: function () {
        this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
        this.version = this.searchVersion(navigator.userAgent)
            || this.searchVersion(navigator.appVersion)
            || "an unknown version";
        this.OS = this.searchString(this.dataOS) || "an unknown OS";
    },
    searchString: function (data) {
        for (var i=0;i<data.length;i++)    {
            var dataString = data[i].string;
            var dataProp = data[i].prop;
            this.versionSearchString = data[i].versionSearch || data[i].identity;
            if (dataString) {
                if (dataString.indexOf(data[i].subString) != -1)
                    return data[i].identity;
            }
            else if (dataProp)
                return data[i].identity;
        }
    },
    searchVersion: function (dataString) {
        var index = dataString.indexOf(this.versionSearchString);
        if (index == -1) return;
        return
parseFloat(dataString.substring(index+this.versionSearchString.length+1));
    },
    dataBrowser: [
        {
            string: navigator.userAgent,
            subString: "Chrome",
            identity: "Chrome"
        },
        {     string: navigator.userAgent,
            subString: "OmniWeb",
            versionSearch: "OmniWeb/",
            identity: "OmniWeb"
        },
        {
            string: navigator.vendor,
            subString: "Apple",
            identity: "Safari",
            versionSearch: "Version"
        },
        {
            prop: window.opera,
            identity: "Opera"
        },
        {
            string: navigator.vendor,
            subString: "iCab",
            identity: "iCab"
        },
        {
            string: navigator.vendor,
            subString: "KDE",
            identity: "Konqueror"
        },
        {
            string: navigator.userAgent,
            subString: "Firefox",
            identity: "Firefox"
        },
        {
            string: navigator.vendor,
            subString: "Camino",
            identity: "Camino"
        },
        {        // for newer Netscapes (6+)
            string: navigator.userAgent,
            subString: "Netscape",
            identity: "Netscape"
        },
        {
            string: navigator.userAgent,
            subString: "MSIE",
            identity: "Explorer",
            versionSearch: "MSIE"
        },
        {
            string: navigator.userAgent,
            subString: "Gecko",
            identity: "Mozilla",
            versionSearch: "rv"
        },
        {         // for older Netscapes (4-)
            string: navigator.userAgent,
            subString: "Mozilla",
            identity: "Netscape",
            versionSearch: "Mozilla"
        }
    ],
    dataOS : [
        {
            string: navigator.platform,
            subString: "Win",
            identity: "Windows"
        },
        {
            string: navigator.platform,
            subString: "Mac",
            identity: "Mac"
        },
        {
               string: navigator.userAgent,
               subString: "iPhone",
               identity: "iPhone/iPod"
        },
        {
            string: navigator.platform,
            subString: "Linux",
            identity: "Linux"
        }
    ]

};
// init detection
g_browserDetect.init();

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
 
/**********
 SLIDESHOW
**********/
// SS - side bar mini slider
// width and height of side bar mini slider
var SS_WIDTH = 600;
var SS_HEIGHT = 350;
var SS_EASING_METHOD = "easeOutCirc";
var SS_TOP_ZINDEX = 2;     
var SS_BOTTOM_ZINDEX = 1;
var SS_SLIDE_TIME = 600;

// NEXT-IMAGE-BUTTON OBJECT DEFINITION
// object keep information and functions to control side bar mini slider
var g_slideshow = new Object();
    // Object members:
    
    // count of slides in slider 
    g_slideshow.slideCount = 0;
    // current slide
    g_slideshow.currentSlide = 0;
    // if false slide flip is blocked
    g_slideshow.canFlip = true;
    // button index
    g_slideshow.btnIndex = 0;
    // autoplay timer handle
    g_slideshow.timerHandle = null;

    // FUNCTION:
    // mini slider auto play function
    g_slideshow.autoPlay = function()
    {
        clearTimeout(g_slideshow.timerHandle);
        g_slideshow.timerHandle = null;
        g_slideshow.flip();
        g_slideshow.timerHandle = setTimeout(g_slideshow.autoPlay, 6000);    
    } // end of function autoPlay
    
    // FUNCTION:
    // initialize slider start settings
    g_slideshow.initialize = function()
    {
        var slideList = $("#js-slideshow .slide");
        g_slideshow.slideCount = slideList.length;

        // hide all slide behind right slider edge
        $(slideList).each(
            function()
            {
                $(this).css("left", SS_WIDTH);
                $(this).css("z-index", SS_WIDTH);
            }
        );
        // but one slide - first, make visible on page load
        $("#js-slideshow .slide:first").css("left", 0).css("z-index", SS_BOTTOM_ZINDEX);
        // check first button
        $("#js-slideshow .btn:first").css("background-color", "#FFF").css("color", "#000");
        
        $("#js-slideshow .btn").click(
            function()
            {
                // if slide flip is blocked return from function
                if(false == g_slideshow.canFlip)
                {
                    return;
                }
     
            
                $("#js-slideshow .btn").css("background-color", "#45471F").css("color", "#CCC");
                $(this).css("background-color", "#FFF").css("color", "#000");
                var index = $("#js-slideshow .btn").index(this);
                g_slideshow.btnIndex = index;
                
                if(g_slideshow.currentSlide != index)
                {
                    g_slideshow.flipOnIndex(index);
                }                
            }
        );
        
        $("#js-slideshow .btn").hover(
            function()
            {
                var index = $("#js-slideshow .btn").index(this);
                if(g_slideshow.btnIndex != index)
                {
                    $(this).css("background-color", "#5B5E33");
                }
            },
            function()
            {
                var index = $("#js-slideshow .btn").index(this);
                if(g_slideshow.btnIndex != index)
                {            
                    $(this).css("background-color", "#45471F");
                }
            }
        );
        
       
        g_slideshow.timerHandle = setTimeout(g_slideshow.autoPlay, 4000);        

    } // end of function initialize
    
    // FUNCTION:
    // flip slider to next slide    
    g_slideshow.flip = function()
    {
        // if slide flip is blocked return from function
        if(false == g_slideshow.canFlip)
        {
            return;
        }
        // block slide flip
        g_slideshow.canFlip = false;
        // save current slide number
        var prevSlide = g_slideshow.currentSlide;
        // move to next slide
        g_slideshow.currentSlide += 1;
        // check range
        if(g_slideshow.currentSlide >= g_slideshow.slideCount)
        {
           // if overflow, back to first slide
           g_slideshow.currentSlide = 0;
        }

        // get button handle
        var btnHandle = $("#js-slideshow .btn:eq("+this.currentSlide+")");
        g_slideshow.btnIndex = this.currentSlide;
        $("#js-slideshow .btn").css("background-color", "#45471F").css("color", "#fff");
        $(btnHandle).css("background-color", "#FFF").css("color", "#000");        
        
        // move slide
        $("#js-slideshow .slide:eq("+prevSlide+")")
            .animate({left: -SS_WIDTH}, SS_SLIDE_TIME);        
        
        $("#js-slideshow .slide:eq("+g_slideshow.currentSlide+")")
            // before start animation set z-index to top
            .css("z-index", SS_TOP_ZINDEX)
            .css("opacity", 1.0)
            .animate({left: 0}, SS_SLIDE_TIME,
                function()
                {
                    // take previous slide to right
                    $("#js-slideshow .slide:eq("+prevSlide+")").css("left", SS_WIDTH);
                    // unblock slide fliping
                    g_slideshow.canFlip = true; 
                    // after animation change current visible slide z-index to bottom
                    $(this).css("z-index", SS_BOTTOM_ZINDEX);
                }             
        );
    } // end of function flip
    
    // FUNCTION:
    // flip slider to selected slide
    g_slideshow.flipOnIndex = function(index)
    {
        // if user click on button for current visible slide return from function
        var btnIndex = index;
        if(btnIndex == g_slideshow.currentSlide)
        {
            return;
        }    
    
        // if slide flip is blocked return from function
        if(false == g_slideshow.canFlip)
        {
            return;
        }
    

        clearTimeout(g_slideshow.timerHandle);
        
        // block slide flip
        g_slideshow.canFlip = false;
        
        // move slide
        $("#js-slideshow .slide:eq("+g_slideshow.currentSlide+")")
            .animate({left: -SS_WIDTH}, SS_SLIDE_TIME);
        
        $("#js-slideshow .slide:eq("+index+")")
            // before start animation set z-index to top
            .css("z-index", SS_TOP_ZINDEX)
            .css("opacity", 1.0) 
            .animate({left: 0}, SS_SLIDE_TIME,
                function()
                {
                    // take previous slide to right
                    $("#js-slideshow .slide:eq("+g_slideshow.currentSlide+")").css("left", SS_WIDTH);
                    // change current slide
                    g_slideshow.currentSlide = index;                    
                    // unblock slide fliping
                    g_slideshow.canFlip = true; 
                    // after animation change current visible slide z-index to bottom
                    $(this).css("z-index", SS_BOTTOM_ZINDEX);
                    // set autoplay
                    g_slideshow.timerHandle = setTimeout(g_slideshow.autoPlay, 4000);
                }             
        );
        
    }  // end of function flipOnIndex
// END OF OBJECT DEFINITION         

function setupSlideshow()
{
    g_slideshow.initialize();
} // end of function setupSlideshow