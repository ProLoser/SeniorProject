/********************************************************************
    File:   
        common.js
    Brief:  
        Implementation of common functionality for whole website
    Dependencies:
        jquery-1.3.2.min.js             (jQuery library)
        jquery.easing.1.2.js            (jQuery library plugin)          
        cufon-yui.js                    (font replacement tool) 
    Author:
        DigitalCavalry
    Author URI:
        http://graphicriver.net/user/DigitalCavalry
*********************************************************************/

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

// alias to jQuery library, function noConflict release control of the $ variable 
var $j = jQuery.noConflict();

/**************************
    GLOBAL FUNCTIONALITY
**************************/

// global settings
function setupGlobal()
{
    // blur focus then user click on <a> element
    $j("a").focus(function(){$j(this).blur();});
    // the same for object with id searchBoxBtn
    $j("#searchBoxBtn").focus(function(){$j(this).blur();}); 
}

/**************************
    SEARCH BOX CODE
**************************/

// if set to true search box auto play is run
var g_searchBoxAutoPlayAllowed = true;
// display animated text true/false
var g_serachBoxPlayText = true;
// text wich will be displayed by auto play function
var g_searchBoxDummyText = "type text to search..";
// current end position of text display by auto play function
var g_searchBoxTextPos = 0;
// handle of auto play search box timer
var g_searchBoxTimer = null;

// Auto play serach box function, it task is display dummy text in some time period
function searchBoxAutoPlay()
{
    // if auto play is turn off, function set timer
    // to 16 seconds and return control 
    if(false == g_searchBoxAutoPlayAllowed)
    {
        // chcek status in 16 seconds
        g_searchBoxTimer = setTimeout(searchBoxAutoPlay, 16000);
        return;
    }
    
    // get number of characters in dummy text
    var length = g_searchBoxDummyText.length;
    // move to next character
    g_searchBoxTextPos++;
    // if end of string, clean search box and return to begin 
    if(g_searchBoxTextPos > length)
    {
       $j("#searchBox").val("");
       g_searchBoxTextPos = 0;
    }
    
    // time period between character displaying in miliseconds
    var timeOut = 50;
    // if character is the last character in string,
    // we set next call function in 20 seconds, becouse we want
    // to keep all dummy text on screen longer time
    if(g_searchBoxTextPos == length)
    {
       timeOut = 20000;
    }
    // extract substring from dummy text
    var sub = g_searchBoxDummyText.substr(0, g_searchBoxTextPos);
    // set substring for search box
    $j("#searchBox").val(sub);
    // set next function call in timeOut miliseconds
    g_searchBoxTimer = setTimeout(searchBoxAutoPlay, timeOut);
} // end of function searchBoxAutoPlay

// This function setup search box, and is called only one time when page is loaded
function setupSearchBox()
{
    // set action for focus on searchbox
    $j("#searchBox").focus(
        function(){
            g_searchBoxAutoPlayAllowed = false;
            $j("#searchBox").val("");
            $j(this).css("color", "#FFF");
            clearTimeout(g_searchBoxTimer);
            });
    
    // set action for blur on searchbox
    $j("#searchBox").blur(
        function(){
            $j(this).val("");
            $j(this).css("color", "#888");
            g_searchBoxTextPos = 0;
            clearTimeout(g_searchBoxTimer); 
            g_searchBoxAutoPlayAllowed = true;    
            g_searchBoxTimer = setTimeout(searchBoxAutoPlay, 5000);
    });
            
    // clean searchbox
    $j("#searchBox").val("");
    // set auto playing
    if(g_serachBoxPlayText == true)
    {
        g_searchBoxTimer = setTimeout(searchBoxAutoPlay, 5000); 
    }
} // end of function setupSearchBox


/**************************
   COMMUNITY BUTTONS
**************************/

// function change image source for community buttons then user hover it with mouse
function setupCommunityButtons()
{
    // set hover action for flickr, twitter, facebook and rss button
    $j("#flickrBtn, #twitterBtn, #facebookBtn, #rssBtn").hover(
        function()
        {
            $j(this).css("background-position", "0px -26px");
        },
        function()
        {
            $j(this).css("background-position", "0px 0px"); 
        }
    );    
} // end of function setupCommunityButtons


/**************************
   TOOLTIP TEXT
**************************/

function setupToolTipText()
{  
    // when user move cursor on element witch class textTooltipCenterTop
    // fallowing code will be executed, one function when the mouse is move on
    // element, and one function when mouse cursor is moved out,
    //       
    $j(".textTooltipCenterTop, .textTooltipLeftTop, .textTooltipRightTop").hover(function(e)
    {
        var yoffset = -10;
        var tip = $j(this).find(".desc").html();

        // adding to page text preview container
        $j("body").append(
            "<div id='textPreview'><div id='textPreviewDesc'></div></div>");
        
        // set tip text    
        $j("#textPreviewDesc").html(tip);
        // get width off tip container
        var textToolTipWidth = $j("#textPreview").width();
                
        // check the class name, and calculate display offset
        var xoffset = 0;
        if($j(this).hasClass("textTooltipCenterTop"))
        {
            xoffset = -Math.round(textToolTipWidth/2)
        } else
        if($j(this).hasClass("textTooltipLeftTop"))
        {
            xoffset = -textToolTipWidth;
        } else
        if($j(this).hasClass("textTooltipRightTop"))
        {
            xoffset = 0;
        }                
 
        // set position of tip container and animte it
        $j("#textPreview").css("width", textToolTipWidth+"px")
            .css("left", (e.pageX + xoffset) + "px")
            .css("top", (e.pageY + yoffset - $j("#textPreview").height()) + "px")
            .css("visibility", "visible")
            .css("opacity", "0.0")
            .animate({opacity: 1.0}, 400);                                   
    },
    // when hover is out, we need to remove #textPreview container from page
    function()
    {
        $j("#textPreview").remove();
    });    
    
    // bind function to mouse move event, we move the tooltip with mouse cursor
    $j(".textTooltipCenterTop, .textTooltipLeftTop, .textTooltipRightTop").mousemove(
    function(e)
    {
        var yoffset = -10;
        var textToolTipWidth = $j("#textPreview").width();
         
        // check the class name, and calculate display offset
        var xoffset = 0;
        if($j(this).hasClass("textTooltipCenterTop"))
        {
            xoffset = -Math.round(textToolTipWidth/2)
        } else
        if($j(this).hasClass("textTooltipLeftTop"))
        {
            xoffset = -textToolTipWidth;
        } else
        if($j(this).hasClass("textTooltipRightTop"))
        {
            xoffset = 0;
        }        
        
        // set postion of tip container        
        $j("#textPreview")
            .css("top",(e.pageY + yoffset - $j("#textPreview").height()) + "px")
            .css("left",(e.pageX + xoffset) + "px");
    });
}; // end of function setupToolTipText


/**************************
   CUFON FONT REPLACEMENT
**************************/

// default cuffon text replacement 
function setupCufonFontReplacement()
{
    Cufon.replace(".commonPageTitle", {fontWeight: 300});
    Cufon.replace(".commonItemHeader", {fontWeight: 300});
    Cufon.replace(".footerTitleSpan", {fontWeight: 700});
    Cufon.replace("#headerContainer #title", {fontWeight: 700});
    Cufon.replace("#headerContainer .titleSlogan", {fontWeight: 400});
    Cufon.replace(".sidebarTabsContainer .title", {fontWeight: 700});
    Cufon.replace(".sidebarPopularContainer .header", {fontWeight: 300});
	Cufon.replace(".slideFaderDesc .title", {fontWeight: 700});
    // common styles    
    setupCufonBasicStyles();
} // end of function setupCufonFontReplacement

function setupCufonBasicStyles()
{
    Cufon.replace(".h1Thin", {fontWeight: 300});
    Cufon.replace(".h2Thin", {fontWeight: 300});
    Cufon.replace(".h3Thin", {fontWeight: 300});
    Cufon.replace(".h4Thin", {fontWeight: 300});
    Cufon.replace(".h5Thin", {fontWeight: 300});
    
    Cufon.replace(".h1Normal", {fontWeight: 400});
    Cufon.replace(".h2Normal", {fontWeight: 400});
    Cufon.replace(".h3Normal", {fontWeight: 400});
    Cufon.replace(".h4Normal", {fontWeight: 400});
    Cufon.replace(".h5Normal", {fontWeight: 400});
    
    Cufon.replace(".h1Bold", {fontWeight: 700});
    Cufon.replace(".h2Bold", {fontWeight: 700});
    Cufon.replace(".h3Bold", {fontWeight: 700});
    Cufon.replace(".h4Bold", {fontWeight: 700});
    Cufon.replace(".h5Bold", {fontWeight: 700});    
} // end of function setupCufonBasicStyles

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
    $j('.asyncImgLoad').each(
        function()
        {   
            // save handle to loader - caintainer which we gona insert loaded image    
            var loader = $j(this);
            // get image path from loader title attribute
            var imagePath = loader.attr('title');
            // create new image object
            var img = new Image();
            // set opacity for image to maximum
            // value 0.0 means completly transparent
            $j(img).css("opacity", "0.0")
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
                        $j(this)
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
 

/**************************
   SMART IMAGE PEVIEW
**************************/

// global variables that keep width and height previewed image
var g_imagePreviewWidth = 0;
var g_imagePreviewHeight = 0;
var g_imgExtraYOffset = 0;
// variable help prevent hover overlap on real web serwer
// then user move cursor on other thumb, function compare new thumb handle 
// with one saved in this variable, then there is difference this is signal for
// old hovered action that new action is actualy in work
var g_imagePreviewHandle = null;
// cursor X and Y postion in hover moment
var g_onHoverX = 0;
var g_onHoverY = 0;
var g_preTopChanged = false;
// function display image preview, the path to image is saved in attribute "rel"
function setupToolTipImagePreview()
{
    // for every object with class "imgTipLeftTop",
    // "imgTipRightTop" and "imgTipCenterTop"
    $j(".imgTipLeftTop, .imgTipRightTop, .imgTipCenterTop").hover(function(e)
    {
        // save handle in global variable
        g_imagePreviewHandle = this;
        // image preview container x,y offset from the cursor position
        var offsetX = 0;       
        var offsetY = -15;
        // keep hovered div handle in local variable
        var hoveredObject = this;        
        // get path to image file
        var imagePath = $j(this).attr("rel");
        // find image thumb in div and decrease opaque to 50% in 300ms animation
        // before animation can start, we must preventive stop earlier one
        $j(this).find("img").stop().animate({opacity:0.5},300); 
  
        // adding to page image preview container
        $j("body").append(
            "<div id='imgPreview'><div id='imgPreviewImg'></div><div id='imgPreviewDesc'></div></div>");
            
        // hide image preview container, this is necessary to correctly call show function
        $j("#imgPreview").hide(); 
           
            // create new image object
            var img = new Image();
            // bind function to object which gona be called when new image loading is finished
            $j(img).load(function() 
            {
                // check image preview overlap
                if(g_imagePreviewHandle != hoveredObject)
                {
                    // in new image preview is in progress function return control
                    return;
                }
                // save image width and height in global variables
                g_imagePreviewWidth = img.width;
                g_imagePreviewHeight = img.height;
                g_imgExtraYOffset = 0;
                
                if($j(hoveredObject).hasClass("imgTipLeftTop"))
                {
                    offsetX = -30 -g_imagePreviewWidth;
                } else
                if($j(hoveredObject).hasClass("imgTipRightTop"))
                {
                    offsetX = 30;
                } else
                if($j(hoveredObject).hasClass("imgTipCenterTop"))
                {
                    offsetX = -(g_imagePreviewWidth / 2);
                }

                // get image description ant put text in image desc container
                var imgDesc = $j(hoveredObject).find(".desc");
                if(imgDesc.length != 0)
                {
                    var txt = $j(imgDesc).html();
                    var search = "<br";
                    if(g_browserDetect.browser == "Explorer" || g_browserDetect.browser == "Opera")
                    {
                        search = "<BR";
                    }
                    var count = 1;
                    var start = 0;
                    var result = 0;
                    while((result = txt.indexOf(search, start)) != -1)
                    {
                       start = result + 3;
                       count++; 
                    }
                    g_imgExtraYOffset = 14 * count; 
                    $j("#imgPreview").find("#imgPreviewDesc").html(txt);
                    
                } else
                {
                    $j("#imgPreview").find("#imgPreviewDesc").remove();
                }
                
                // check space available space in browser window
                g_onHoverX = e.pageX;
                g_onHoverY = e.pageY;
                var browserWidth = $j(window).width();
                var browserHeight = $j(window).height();
                var preLeft = e.pageX + offsetX;
                var preTop = e.pageY + offsetY - g_imagePreviewHeight - g_imgExtraYOffset;
                
                if(g_imagePreviewHeight > e.clientY)
                {                   
                   preTop += g_imgExtraYOffset + g_imagePreviewHeight - (offsetY*2);
                   g_preTopChanged = true;
                }
                if(preLeft < 0)
                {
                    preLeft = 30 + (e.pageX - g_onHoverX);
                }
                // check space on right
                if(preLeft + g_imagePreviewWidth > browserWidth)
                {
                    preLeft = browserWidth - g_imagePreviewWidth - 30 + (e.pageX - g_onHoverX) + (e.pageX - e.clientX);
                }                                
                
                // add image to preview container
                $j("#imgPreviewImg").html(this);
                // set height of container
                $j("#imgPreviewImg").css("height", g_imagePreviewHeight);        

                // set image preview container style,
                // we must set width of container, the height is calculated automaticly based on image height
                // we must set also image container position, make it visible and set opacity to max
                $j("#imgPreview").css("width", (g_imagePreviewWidth)+"px")
                    .css("left", preLeft + "px")
                    .css("top", preTop + "px")
                    .css("visibility", "visible")
                    .css("opacity", "1.0")
                    .show("fast");
       
                // image opacity we animate separately
                $j(this).css("margin", "0px").css("padding", "0px").css("opacity", "0.0").animate({opacity: 1.0}, 800);
                // we must also restore orginal opacity of hovered thumb
                $j(hoveredObject).find("img").stop().animate({opacity:1.0},300);
                 
            // set new value for "src" attribute, this me     
            }).attr("src", imagePath);

    },
    // when hover is out, we need to remove #imagePreview container from page
    function()
    {
        // remove image preview container from page
        $j("#imgPreviewDesc").remove();
        $j("#imgPreviewImg").find("img").stop().remove();
        $j("#imgPreviewImg").remove();
        $j("#imgPreview").stop().remove();
        // we must also restore orginal opacity of hovered thumb  
        $j(this).find("img").stop().animate({opacity:1.0},300);
        g_imagePreviewHandle = null;
        g_preTopChanged = false; 
        
    });    
    
    // for every image preview thumb we bind function to mouse move event, 
    // this allow user to move the tooltip with mouse cursor in are of the thumb
    $j(".imgTipLeftTop, .imgTipRightTop, .imgTipCenterTop").mousemove(
        function(e)
        {
            // image preview container x,y offset form the cursor position
            var offsetX = 0;
            if($j(this).hasClass("imgTipLeftTop"))
            {
              offsetX = -30 - g_imagePreviewWidth;
            } else
            if($j(this).hasClass("imgTipRightTop"))
            {
              offsetX = 30;
            } else
            if($j(this).hasClass("imgTipCenterTop"))
            {
              offsetX = -g_imagePreviewWidth / 2;
            }
            
            var offsetY = -15;        
            
            // check space available space in browser window 
            var preLeft = e.pageX + offsetX;
            var preTop = e.pageY + offsetY - g_imagePreviewHeight - g_imgExtraYOffset;
            // check space on top
            
            if(g_imagePreviewHeight > e.clientY || g_preTopChanged == true)
            {
                if(g_preTopChanged == true)
                {
                   preTop += g_imgExtraYOffset + g_imagePreviewHeight - (offsetY*2);
                }
            }
            // check space on left
            if(preLeft < 0)
            {
              preLeft = 30 + (e.pageX - g_onHoverX);
            }
            // check space on right
            var browserWidth = $j(window).width(); 
            if(preLeft + g_imagePreviewWidth > browserWidth)
            {
              preLeft = browserWidth - g_imagePreviewWidth - 30 + (e.pageX - g_onHoverX) + (e.pageX - e.clientX);
            }            
            
            // change image preview container position
            $j("#imgPreview")
                .css("top",preTop + "px")
                .css("left", preLeft + "px");
        });
       
} // end of function setupToolTipImagePreview



/**************************************
   SMART IMAGE PEVIEW FOR TEXT LABELS
***************************************/

// global variables that keep width and height previewed image
var g_imgTxtPreviewWidth = 0;
var g_imgTxtPreviewHeight = 0;
var g_imgTxtExtraYOffset = 0;
// variable help prevent hover overlap on real web serwer
// then user move cursor on other thumb, function compare new thumb handle 
// with one saved in this variable, then there is difference this is signal for
// old hovered action that new action is actualy in work
var g_imgTxtPreviewHandle = null;
var g_displayLoader = false;
// cursor X and Y postion in hover moment
var g_onTxtHoverX = 0;
var g_onTxtHoverY = 0;
var g_preTxtTopChanged = false;
// function display image preview, the path to iamge is saved in attribute "rel"
function setupTextLabelImagePreview()
{
    // for every object with class "imgTxtTipLeftTop",
    // "imgTxtTipRightTop" and "imgTxtTipCenterTop"
    $j(".imgTxtTipLeftTop, .imgTxtTipRightTop, .imgTxtTipCenterTop").hover(function(e)
    {
        // save handle in global variable
        g_imgTxtPreviewHandle = this;
        // image preview container x,y offset form the cursor position
        var offsetX = 0;       
        var offsetY = -15;
        // keep hovered object handle in local variable
        var hoveredObject = this;        
        // get path to image file
        var imagePath = $j(this).attr("rel");
  
        // adding to page image preview container
        $j("body").append(
            "<div id='imgTxtPreview'><div id='imgTxtPreviewImg'></div><div id='imgTxtPreviewDesc'></div></div>");
            
        $j("body").append("<div id='imgTxtLoader'></div>");
        $j("#imgTxtLoader")
                    .stop()
                    .css("opacity", 0.0)
                    .css("left", (e.pageX + 8) + "px")
                    .css("top", (e.pageY - 24) + "px")
                    .animate({opacity: 1.0}, 400);        
        g_displayLoader = true;
            
        // hide image preview container, this is necessary to correctly call show function
        $j("#imgTxtPreview").hide();
          
            // create new image object
            var img = new Image();
            // bind function to object which gona be called when new image loading is finished
            $j(img).load(function() 
            {
                // check image preview overlap
                if(g_imgTxtPreviewHandle != hoveredObject)
                {
                    // in new image preview is in progress function return control
                    return;
                }
                // save image width and height in global variables
                g_imgTxtPreviewWidth = img.width;
                g_imgTxtPreviewHeight = img.height;
                g_imgTxtExtraYOffset = 0;
                
                if($j(hoveredObject).hasClass("imgTxtTipLeftTop"))
                {
                    offsetX = -20 -g_imgTxtPreviewWidth;
                } else
                if($j(hoveredObject).hasClass("imgTxtTipRightTop"))
                {
                    offsetX = 20;
                } else
                if($j(hoveredObject).hasClass("imgTxtTipCenterTop"))
                {
                    offsetX = -(g_imgTxtPreviewWidth / 2);
                }
                
                // get image description ant put text in image desc container
                var imgDesc = $j(hoveredObject).find(".desc");
                if(imgDesc.length != 0)
                {
                    var txt = $j(imgDesc).html();
                    var search = "<br";
                    if(g_browserDetect.browser == "Explorer" || g_browserDetect.browser == "Opera")
                    {
                        search = "<BR";
                    }
                    var count = 1;
                    var start = 0;
                    var result = 0;
                    while((result = txt.indexOf(search, start)) != -1)
                    {
                       start = result + 3;
                       count++; 
                    }
                    g_imgTxtExtraYOffset = 14 * count; 
                    $j("#imgTxtPreview").find("#imgTxtPreviewDesc").html(txt);
                    
                } else
                {
                    $j("#imgTxtPreview").find("#imgTxtPreviewDesc").remove();
                }                

                // check space available space in browser window
                g_onTxtHoverX = e.pageX;
                g_onTxtHoverY = e.pageY;
                var browserWidth = $j(window).width();
                var browserHeight = $j(window).height();
                var preLeft = e.pageX + offsetX;
                var preTop = e.pageY + offsetY - g_imgTxtPreviewHeight - g_imgTxtExtraYOffset;
                
                if(g_imgTxtPreviewHeight > e.clientY)
                {
                   preTop += g_imgTxtExtraYOffset + g_imgTxtPreviewHeight - (offsetY*2);
                   g_preTxtTopChanged = true;
                }
                if(preLeft < 0)
                {
                    preLeft = 30 + (e.pageX - g_onTxtHoverX);
                }
                // check space on right
                if(preLeft + g_imgTxtPreviewWidth > browserWidth)
                {
                    preLeft = browserWidth - g_imgTxtPreviewWidth - 30 + (e.pageX - g_onTxtHoverX) + (e.pageX - e.clientX);
                }
               
                // add image to preview container
                $j("#imgTxtPreviewImg").html(this);
                $j("#imgTxtPreviewImg").css("height", g_imgTxtPreviewHeight);        

                // set image preview container style,
                // we must set width of container, the height is calculated automaticly based on image height
                // we must set also image container position, make it visible and set opacity to max
                $j("#imgTxtPreview").hide()
                    .css("height", "auto")
                    .css("width", (g_imgTxtPreviewWidth)+"px")
                    .css("left", preLeft + "px")
                    .css("top", preTop + "px")
                    .css("visibility", "visible")
                    .css("opacity", "1.0")
                    .show("fast");
                g_displayLoader = false;
                $j("#imgTxtLoader").stop().animate({opacity: 0.0}, 400, function(){$j(this).remove()});
                   
                // image opacity we animate separately
                $j(this).css("margin", "0px").css("padding", "0px").css("opacity", "0.0").animate({opacity: 1.0}, 800);
                 
            // set new value for "src" attribute, this me     
            }).attr("src", imagePath);

    },
    // when hover is out, we need to remove #imagePreview container from page
    function()
    {
        // remove image preview container from page
        $j("#imgTxtPreviewDesc").remove();
        $j("#imgTxtPreviewImg").find("img").stop().remove();
        $j("#imgTxtPreviewImg").remove();
        $j("#imgTxtPreview").stop().remove(); 
        g_imgTxtPreviewHandle = null;
        g_displayLoader = false;
        g_preTxtTopChanged = false;
        $j("#imgTxtLoader").stop().remove()
         
        
    });    
    
    // for every image preview thumb we bind function to mouse move event, 
    // this allow user to move the tooltip with mouse cursor in are of the thumb
    $j(".imgTxtTipLeftTop, .imgTxtTipRightTop, .imgTxtTipCenterTop").mousemove(
        function(e)
        {
            // image preview container x,y offset form the cursor position
            var offsetX = 0;
            if($j(this).hasClass("imgTxtTipLeftTop"))
            {
              offsetX = -20 - g_imgTxtPreviewWidth;
            } else
            if($j(this).hasClass("imgTxtTipRightTop"))
            {
              offsetX = 20;
            } else
            if($j(this).hasClass("imgTxtTipCenterTop"))
            {
              offsetX = -g_imgTxtPreviewWidth / 2;
            }
            
            var offsetY = -15; 
            
            // check space available space in browser window 
            var preLeft = e.pageX + offsetX;
            var preTop = e.pageY + offsetY - g_imgTxtPreviewHeight - g_imgTxtExtraYOffset;
            // check space on top
            
            if(g_imgTxtPreviewHeight > e.clientY || g_preTxtTopChanged == true)
            {
                if(g_preTxtTopChanged == true)
                {
                   preTop += g_imgTxtExtraYOffset + g_imgTxtPreviewHeight - (offsetY*2);
                }
            }
            // check space on left
            if(preLeft < 0)
            {
              preLeft = 30 + (e.pageX - g_onTxtHoverX);
            }
            // check space on right
            var browserWidth = $j(window).width(); 
            if(preLeft + g_imgTxtPreviewWidth > browserWidth)
            {
              preLeft = browserWidth - g_imgTxtPreviewWidth - 30 + (e.pageX - g_onTxtHoverX) + (e.pageX - e.clientX);
            }            
                   
            // change image preview container position
            $j("#imgTxtPreview")
                .css("top", preTop + "px")
                .css("left", preLeft + "px");
                
            if(g_displayLoader)
            {
                $j("#imgTxtLoader")
                    .css("left", (e.pageX + 8) + "px")
                    .css("top", (e.pageY - 24) + "px");            
            }
        });
       
}; // end of function setupTextLabelImagePreview


/**************************************
   SIDE BAR MINI SLIDER CONFIGURATION
***************************************/
// SBMS - side bar mini slider
// width and height of side bar mini slider
var SBMS_WIDTH = 320;
var SBMS_HEIGHT = 270;
var SBMS_EASING_METHOD = "easeOutCirc";
var SBMS_TOP_ZINDEX = 2;     
var SBMS_BOTTOM_ZINDEX = 1;
var SBMS_SLIDE_TIME = 600;

// NEXT-IMAGE-BUTTON OBJECT DEFINITION
// object keep information and functions to control side bar mini slider
var g_sideBarMiniSlider = new Object();
    // Object members:
    
    // count of slides in slider 
    g_sideBarMiniSlider.slideCount = 0;
    // current slide
    g_sideBarMiniSlider.currentSlide = 0;
    // if false slide flip is blocked
    g_sideBarMiniSlider.canFlip = true;
    // button index
    g_sideBarMiniSlider.btnIndex = 0;
    // autoplay timer handle
    g_sideBarMiniSlider.timerHandle = null;

    // FUNCTION:
    // mini slider auto play function
    g_sideBarMiniSlider.autoPlay = function()
    {
        clearTimeout(g_sideBarMiniSlider.timerHandle);
        g_sideBarMiniSlider.timerHandle = null;
        g_sideBarMiniSlider.flip();
        g_sideBarMiniSlider.timerHandle = setTimeout(g_sideBarMiniSlider.autoPlay, 6000);    
    } // end of function autoPlay
    
    // FUNCTION:
    // initialize slider start settings
    g_sideBarMiniSlider.initialize = function()
    {
        var slideList = $j("#sidebarMiniSliderContainer .slide");
        g_sideBarMiniSlider.slideCount = slideList.length;

        // hide all slide behind right slider edge
        $j(slideList).each(
            function()
            {
                $j(this).css("left", SBMS_WIDTH);
                $j(this).css("z-index", SBMS_WIDTH);
            }
        );
        // but one slide - first, make visible on page load
        $j("#sidebarMiniSliderContainer .slide:first").css("left", 0).css("z-index", SBMS_BOTTOM_ZINDEX);
        // check first button
        $j("#sidebarMiniSliderContainer .btn:first").css("background-color", "#FFF").css("color", "#000");
        
        $j("#sidebarMiniSliderContainer .btn").click(
            function()
            {
                // if slide flip is blocked return from function
                if(false == g_sideBarMiniSlider.canFlip)
                {
                    return;
                }
     
            
                $j("#sidebarMiniSliderContainer .btn").css("background-color", "#222").css("color", "#CCC");
                $j(this).css("background-color", "#FFF").css("color", "#000");
                var index = $j("#sidebarMiniSliderContainer .btn").index(this);
                g_sideBarMiniSlider.btnIndex = index;
                
                if(g_sideBarMiniSlider.currentSlide != index)
                {
                    g_sideBarMiniSlider.flipOnIndex(index);
                }                
            }
        );
        
        $j("#sidebarMiniSliderContainer .btn").hover(
            function()
            {
                var index = $j("#sidebarMiniSliderContainer .btn").index(this);
                if(g_sideBarMiniSlider.btnIndex != index)
                {
                    $j(this).css("background-color", "#444");
                }
            },
            function()
            {
                var index = $j("#sidebarMiniSliderContainer .btn").index(this);
                if(g_sideBarMiniSlider.btnIndex != index)
                {            
                    $j(this).css("background-color", "#222");
                }
            }
        );
        
       
        g_sideBarMiniSlider.timerHandle = setTimeout(g_sideBarMiniSlider.autoPlay, 4000);        

    } // end of function initialize
    
    // FUNCTION:
    // flip slider to next slide    
    g_sideBarMiniSlider.flip = function()
    {
        // if slide flip is blocked return from function
        if(false == g_sideBarMiniSlider.canFlip)
        {
            return;
        }
        // block slide flip
        g_sideBarMiniSlider.canFlip = false;
        // save current slide number
        var prevSlide = g_sideBarMiniSlider.currentSlide;
        // move to next slide
        g_sideBarMiniSlider.currentSlide += 1;
        // check range
        if(g_sideBarMiniSlider.currentSlide >= g_sideBarMiniSlider.slideCount)
        {
           // if overflow, back to first slide
           g_sideBarMiniSlider.currentSlide = 0;
        }

        // get button handle
        var btnHandle = $j("#sidebarMiniSliderContainer .btn:eq("+this.currentSlide+")");
        g_sideBarMiniSlider.btnIndex = this.currentSlide;
        $j("#sidebarMiniSliderContainer .btn").css("background-color", "#222").css("color", "#CCC");
        $j(btnHandle).css("background-color", "#FFF").css("color", "#000");        
        
        // move slide
        $j("#sidebarMiniSliderContainer .slide:eq("+prevSlide+")")
            .animate({left: -SBMS_WIDTH}, SBMS_SLIDE_TIME);        
        
        $j("#sidebarMiniSliderContainer .slide:eq("+g_sideBarMiniSlider.currentSlide+")")
            // before start animation set z-index to top
            .css("z-index", SBMS_TOP_ZINDEX)
            .css("opacity", 1.0)
            .animate({left: 0}, SBMS_SLIDE_TIME,
                function()
                {
                    // take previous slide to right
                    $j("#sidebarMiniSliderContainer .slide:eq("+prevSlide+")").css("left", SBMS_WIDTH);
                    // unblock slide fliping
                    g_sideBarMiniSlider.canFlip = true; 
                    // after animation change current visible slide z-index to bottom
                    $j(this).css("z-index", SBMS_BOTTOM_ZINDEX);
                }             
        );
    } // end of function flip
    
    // FUNCTION:
    // flip slider to selected slide
    g_sideBarMiniSlider.flipOnIndex = function(index)
    {
        // if user click on button for current visible slide return from function
        var btnIndex = index;
        if(btnIndex == g_sideBarMiniSlider.currentSlide)
        {
            return;
        }    
    
        // if slide flip is blocked return from function
        if(false == g_sideBarMiniSlider.canFlip)
        {
            return;
        }
    

        clearTimeout(g_sideBarMiniSlider.timerHandle);
        
        // block slide flip
        g_sideBarMiniSlider.canFlip = false;
        
        // move slide
        $j("#sidebarMiniSliderContainer .slide:eq("+g_sideBarMiniSlider.currentSlide+")")
            .animate({left: -SBMS_WIDTH}, SBMS_SLIDE_TIME);
        
        $j("#sidebarMiniSliderContainer .slide:eq("+index+")")
            // before start animation set z-index to top
            .css("z-index", SBMS_TOP_ZINDEX)
            .css("opacity", 1.0) 
            .animate({left: 0}, SBMS_SLIDE_TIME,
                function()
                {
                    // take previous slide to right
                    $j("#sidebarMiniSliderContainer .slide:eq("+g_sideBarMiniSlider.currentSlide+")").css("left", SBMS_WIDTH);
                    // change current slide
                    g_sideBarMiniSlider.currentSlide = index;                    
                    // unblock slide fliping
                    g_sideBarMiniSlider.canFlip = true; 
                    // after animation change current visible slide z-index to bottom
                    $j(this).css("z-index", SBMS_BOTTOM_ZINDEX);
                    // set autoplay
                    g_sideBarMiniSlider.timerHandle = setTimeout(g_sideBarMiniSlider.autoPlay, 4000);
                }             
        );
        
    }  // end of function flipOnIndex
// END OF OBJECT DEFINITION         

function setupSideBarMiniSlider()
{
    g_sideBarMiniSlider.initialize();
} // end of function setupSideBarMiniSlider


/*************************************
    SIDEBAR TABS PANEL
**************************************/   
var g_selectedSideBarTabBtn = null;
var g_tabBtnColorSidebar = "#65B31C";
function setupSidebarTabsPanel()
{
    $j(".sidebarTabsContainer").each(
        function()
        {
            // get number of tab buttons
            var tabsList = $j(this).find(".btn");

            // for every tab button check existing of default tab marker
            for(var i = 0; i < tabsList.length; i++)
            {
               var btn = $j(this).find(".btn:eq("+i+")");
               var defaultTab = $j(btn).find(".default");
               // if tab is default set it to visibile and highlight the button
               if(defaultTab.length != 0)
               {
                    $j(btn).each(function(){g_selectedSideBarTabBtn = this;});
                    var tabID = $j(btn).find(".source").text();
                    $j(tabID).css("visibility", "visible").css("top", 0);
                    $j(btn).css("background-color", g_tabBtnColorSidebar);
                    break;
               }
            }
            
    $j(this).find(".btn").click(
        function()
        {
             if(g_selectedSideBarTabBtn == this)
             {
                return;
             } 
             if(g_selectedSideBarTabBtn != null)
             {
                $j(g_selectedSideBarTabBtn).css("background-color", "#000");
             }
             var oldSource = $j(g_selectedSideBarTabBtn).find(".source").text();
             g_selectedSideBarTabBtn = this;
             $j(this).css("background-color", g_tabBtnColorSidebar);
             
             $j(oldSource).animate({opacity: 0.0}, 200, 
                function()
                {
                    $j(this).css("visibility", "hidden");
                    var tabSource = $j(g_selectedSideBarTabBtn).find(".source").text();
                    $j(tabSource)
                        .css("opacity", 0.0)
                        .css("top", 0)
                        .css("visibility", "visible")
                        .animate({opacity: 1.0}, 400); 
                }
             );
        }
    );
   
    $j(this).find(".btn").hover(
        function()
        {
            if(this != g_selectedSideBarTabBtn)
            {
                $j(this).css("background-color", g_tabBtnColorSidebar);
            }
        },
        function()
        {
            if(this != g_selectedSideBarTabBtn)
            {
                $j(this).css("background-color", "#000000");
            }
        }
    );
            
        }
    );
} // end of function setupSidebarTabsPanel

/***************************************
    LIGHT BOX
****************************************/

function setupMultiImageLightBox()
{
    // we set pretty photo light box for every <a> element
    // which have attribute rel startet from string "prettyPhoto"
    // additionally:
    //      - we allow to resize image 
    //      - set the light box theme to light_rounded
    //      - set own separtor for page list
    //      - and allow to display title
    $j(".sidebarMultiImageBoxContainer a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'light_rounded', 
        allowresize: true,
        counter_separator_label: '-',
        showTitle: true
    });
} // end of function setupMultiImageLightBox 

function setupLinkLightBox()
{
    // we set pretty photo light box for every <a> element
    // which have attribute rel startet from string "prettyPhoto"
    // additionally:
    //      - we allow to resize image 
    //      - set the light box theme to light_rounded
    //      - set own separtor for page list
    //      - and allow to display title
    
    $j("a.lightBox[rel^='prettyPhoto']").prettyPhoto({
        theme: 'light_rounded', 
        allowresize: true,
        counter_separator_label: '-',
        showTitle: true
    });
} // end of function setupLinkLightBox 

/***************************************
   SETUP FADE MOVER SLIDER (FMS)
****************************************/
// array that keeps handles to slides
var g_slideHandleFMS = new Array();
// number of slides
var g_slideCountFMS = 0;
// true if slider have only one slide, 
// then we turn off animation
var g_animationAllowedFMS = true;
// actual displayed slide
var g_actualSlideFMS = 0;
// slider width and height
var FMS_WIDTH = 960;
var FMS_HEIGHT = 300;
// time interval betwen slide show
var FMS_INTERVAL = 5000;
// animation type
var FMS_MIX = 100; // randow slide move and fade
var FMS_FADE = 200; // only fade effect
var FMS_MOVE = 300; // only move effect
var g_animationTypeFMS = FMS_FADE;
var g_autoplayHandleFMS = null;
var g_pauseAutoPlayFMS = false;
var g_timerHandleHideDesc = null;
var g_handleDescPanel = null;

// function switch slides then animation is allowed
function faderMoverSliderAutoplay()
{
    if(g_pauseAutoPlayFMS)
    {
        g_autoplayHandleFMS = setTimeout(faderMoverSliderAutoplay, FMS_INTERVAL);
        return;
    }
    
    // fade betwean two slides
    function fade()
    {
       // get index of next slide
       var nextSlide = g_actualSlideFMS + 1;
       if(nextSlide >= g_slideCountFMS)
       {
           nextSlide = 0;
       }
       $j(g_slideHandleFMS[g_actualSlideFMS]).css("z-index", 10);
       $j(g_slideHandleFMS[nextSlide]).css("z-index", 9).css("left", 0);
                
      $j(g_slideHandleFMS[g_actualSlideFMS]).animate({opacity: 0.0}, 1000,
          // after fade down
          function()
          {
             // hide actual slide
             $j(this).css("left", FMS_WIDTH);
             g_autoplayHandleFMS = setTimeout(faderMoverSliderAutoplay, FMS_INTERVAL);            
          }
      );
      
      $j(g_slideHandleFMS[nextSlide]).animate({opacity: 1.0}, 1000);
      g_actualSlideFMS = nextSlide;        
    } // end of function fade
    
    // move slides on left
    function move()
    {
       // get index of next slide
       var nextSlide = g_actualSlideFMS + 1;
       if(nextSlide >= g_slideCountFMS)
       {
           nextSlide = 0;
       }
       $j(g_slideHandleFMS[g_actualSlideFMS]).css("z-index", 10);
       $j(g_slideHandleFMS[nextSlide]).css("z-index", 9).css("left", FMS_WIDTH).css("opacity", 1.0);
                
      $j(g_slideHandleFMS[g_actualSlideFMS]).animate({left: -FMS_WIDTH}, 1000,
          // after fade down
          function()
          {
             // hide actual slide
             $j(this).css("left", FMS_WIDTH);
             g_autoplayHandleFMS = setTimeout(faderMoverSliderAutoplay, FMS_INTERVAL);            
          }
      );
      
      $j(g_slideHandleFMS[nextSlide]).animate({left: 0}, 1000);
      g_actualSlideFMS = nextSlide;     
    } // end of function move

   // check type of animation 
   if(FMS_FADE == g_animationTypeFMS)
   {
      fade();                               
   } // FMS_FADE 
   if(FMS_MOVE == g_animationTypeFMS)
   {
      move();                               
   } // FMS_MOVE
   if(FMS_MIX == g_animationTypeFMS)
   {
      var value = Math.random();
      
      if(value > 0.5)
      {
          fade();
      } else
      {
          move();
      }                               
   } // FMS_MOVE       

} // end of function faderMoverSliderAutoplay

// function initialize slider
function setupFaderMoverSlider()
{
    $j("#faderMoverSlider").each(
       function()
       {
          // get number of slides
          g_slideCountFMS = $j(this).find(".slide").length;
          // if there is less slides then 2, we turn off the animation
          if(g_slideCountFMS < 2)
          {
             g_animationAllowedFMS = false;
             return;
          }
          
          // collect to array all slides handle, and reverse slide z-index
          // leave first slide on screen, other hide behind right slider border
          for(var i = 0; i < g_slideCountFMS; i++)
          {
             var slideHandle = $j("#faderMoverSlider .slide:eq("+i+")");
             g_slideHandleFMS.push(slideHandle);
             // first on top, then second slide, etc.
             $j(slideHandle).css("z-index", 10 - i);            
             // leave first slide, other hide
             if(i > 0)
             {
                $j(slideHandle).css("left", FMS_WIDTH);
             }
          } // for
          
          
          // bind function to action hover for slides in mover/fader slider
          $j("#faderMoverSlider .slide").hover(
            // mouse hover on
            function()
            {
                  // clear timer which wait to hide slide description block
                  clearTimeout(g_timerHandleHideDesc);
                  // if description block was not hidden we must hide it
                  if(g_handleDescPanel != null)
                  {
                      // hide block in animation
                      $j(g_handleDescPanel).find('.slideFaderDescBack, .slideFaderDesc').stop().animate({bottom:-70, opacity: 0.0}, 600);  
                      // clear handle to block
                      g_handleDescPanel = null;                  
                  }
                  // block autoplaying of mover/fader slider
                  g_pauseAutoPlayFMS = true;
                  // save in global variable new description block handle, but only if exist
                  // and animate this block
                  if($j(this).find('.slideFaderDesc').length > 0)
                  {
                    g_handleDescPanel = this;
                    $j(this).find('.slideFaderDescBack').stop().animate({bottom:0, opacity: 0.8}, 600);
                    $j(this).find('.slideFaderDesc').stop().animate({bottom:0, opacity: 1.0}, 600);                   
                  }
                  
            },
            // mouse hover out
            function()
            {
                  // function definition which hide description block
                  function hideDescPanel()
                  {
                      $j(g_handleDescPanel).find('.slideFaderDescBack, .slideFaderDesc').stop().animate({bottom:-70, opacity: 0.0}, 600);  
                      g_handleDescPanel = null;
                  }
                  // if panel exist and was showed we fire up function to hide it
                  if(null != g_handleDescPanel)
                  {
                     g_timerHandleHideDesc = setTimeout(hideDescPanel, 800);
                  }
                  // allow to autoplay mover/fader slider
                  g_pauseAutoPlayFMS = false;                   
            }
          );
          
          // fire up slide autoplay
          g_autoplayHandleFMS = setTimeout(faderMoverSliderAutoplay, FMS_INTERVAL);      
       }
    );
} // end of function setupFaderMoverSlider

