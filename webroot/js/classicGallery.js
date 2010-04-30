/********************************************************************
    File:   
        classicGallery.js
    Brief:  
        Implementation of JavaScript functionality for 
        the classicGallery[x].html view page
    Dependencies:
        jquery-1.3.2.min.js             (jQuery library)
        jquery.easing.1.2.js            (jQuery library plugin)
        jquery.prettyPhoto.js           (image gallery)
        cufon-yui.js                    (font replacement tool)
    Author:
        DigitalCavalry
    Author URI:
        http://graphicriver.net/user/DigitalCavalry
*********************************************************************/ 

// alias to jQuery library, function noConflict release control of the $ variable 
// to whichever library first implemented it
var $j = jQuery.noConflict();

/***************************************
    ASYNCHRONOUS GALLERY THUMBS LOADING
****************************************/
    
// Function bind action to object with class "galleryThumb". 
// In the title attribute is stored path to image that is inserted to object.
function setupAsynchronousThumbsLoading()
{
    // for each element with class "galleryThumb"
    $j(".galleryThumb").each(
        function()
        {   
            // save handle to loader in temp variable
            var loader = $j(this);
            // get path to image
            var imageFilePath = loader.attr('title');
            // try to create new image
            var img = new Image();
            
            // set opacity to zero and bind function to action onload
            $j(img).css("opacity", "0.0").load(
                function() 
                {
                    // when image is loaded we assign it to loader
                    loader.append(this);
                    // for loaded image we set marion and opacity to zero, and next
                    // animate opacity to max
                    $j(this).css("margin", "0px").css("opacity", "0.0").animate({opacity: 1.0}, 800,
                        function()
                        {
                            // remove from loader unnecessary title attribute and remove background image
                            loader.removeAttr('title').css("background-image", "none");                    
                        });
                }
            ).attr('src', imageFilePath);       
         }
    );
} // end of function setupAsynchronousThumbsLoading    

/***************************************
    CLASSIC GALLERY IMAGE ROTATOR
****************************************/

// number of slider pages in Classic Gallery
var CG_PAGES_COUNT = 0;
// nice easing method for gallery page slide
var EASING_METHOD = "easeOutCirc";    
// number of thumbs in Classic Gallery
var CG_THUMBS_COUNT = 0;
// width of single gallery page
var CG_PAGE_WIDTH = 960;
// index of current gallery page in view 
var currentGalleryPage = 0;
// array of gallery pages handle
var galleryPagesHandleList = new Array();
// can flip page true/false
var canFlipGalleryPages = true;
    
function setupSliderAndThumbs()
{
    // get the number of gallery pages and save it in global variable
    CG_PAGES_COUNT = $j("#galleryContainer .galleryPage").length;
    // display number of pages
    $j("#pageNumber").html("Page: 1/");
    $j("#pageCount").html(CG_PAGES_COUNT);
    // save all pages handle in global array, 
    // first we must get the handle of first page in gallery
    var firstPage = $j("#galleryContainer .galleryPage:first");  
    // and now we must walk across every page in loop
    for(var i = 0; i < CG_PAGES_COUNT; i++)
    {
        // calculate and set left position for page
        var left = i*CG_PAGE_WIDTH;
        $j(firstPage).css("left", left);
        // save page handle in array
        galleryPagesHandleList.push(firstPage);
        // get the next page
        firstPage = $j(firstPage).next(".galleryPage");    
    } // for loop end   
         
    // het the number of gallery thumbs and save it in global variable
    CG_THUMBS_COUNT = $j(".galleryThumb").length;
    // display number of thumbs
    $j("#numberOfImages").html(CG_THUMBS_COUNT);
    
    // set hover action for gallery thumb
    $j(".galleryThumb").hover(
        function()
        {
            // get the index of hovered thumb
            var index = $j("#galleryContainer .galleryThumb").index(this);
            // display index
            $j("#hoveredImageIndex").html("Image: " +(index + 1) + "/");
            
            // change thumb opacity to 90% and change border color
            $j(this).css("opacity", "0.9").css("background-color", "#f5f5f5").css("border", "1px solid #bbb");
            $j(this).parent().css("background-image", "url(img/gallery/classic/picturegradient.jpg)");
        },
        function()
        {
            // change border color
            $j(this).css("opacity", "1.0").css("background-color", "#FFF").css("border", "1px solid #ddd");
            $j(this).parent().css("background-image", "none");
        }
    );      
    setupGalleryButtons();
}  // end of function setupSliderAndThumbs    

function setupGalleryButtons()
{
    // set click action for next page button
    $j("#galleryNextPageBtn").click(function(){nextPage();});
    $j("#galleryNextPagePanelBtn").click(
        function(e)
        {
            nextPage();            
            // stop an event bubbling
            e.stopPropagation();
        }
    );
    
    // set click action for prev page button  
    $j("#galleryPrevPageBtn").click(function(){prevPage();});
    $j("#galleryPrevPagePanelBtn").click(
        function(e)
        {
           prevPage();
           // stop an event bubbling
           e.stopPropagation();
        }
    ); 

    // function switch to next page
    function nextPage()
    {
        // if the gallery have less then 2 pages or
        // page flip is blocked we end function call
        if((CG_PAGES_COUNT < 2) || canFlipGalleryPages == false)
        {
            return;
        }
        
        // prevent gallery page flip
        canFlipGalleryPages = false;
        // get current page
        var currentPage = currentGalleryPage;
        // switch to next page
        var nextPage = currentGalleryPage+1;
        // if next page numnber is to big we go back to first page
        if(nextPage > (CG_PAGES_COUNT - 1))
        {
            nextPage = 0;
        }
        // move page to start position
        $j(galleryPagesHandleList[nextPage]).css("left", CG_PAGE_WIDTH);
        // hide current page with some animation
        $j(galleryPagesHandleList[currentPage])
            .animate({left: 50}, 300, EASING_METHOD, 
                function()
                {
                    // when the first part of hide animation is end we show next page by slide animation
                    $j(galleryPagesHandleList[nextPage]).animate({left: 0}, 1300, EASING_METHOD);
                })
            // call second part of hide animatin 
            .animate({left: -CG_PAGE_WIDTH}, 900, EASING_METHOD, 
                function()
                {
                    // seve next page index in global variable
                    currentGalleryPage = nextPage;
                    // display page number 
                    $j("#pageNumber").html("Page: " + (currentGalleryPage + 1) + "/");
                    // allow gallery page to flip   
                    canFlipGalleryPages = true; 
                });
         
    } // end nextPage

    // function switch to prev page  
    function prevPage()
    {
        // the gallery have less then 2 pages or
        // page flip is blocked we end function call        
        if((CG_PAGES_COUNT < 2) || canFlipGalleryPages == false)
        {
            return;
        }
        
        // prevent gallery page flip  
        canFlipGalleryPages = false;
        // get current page  
        var currentPage = currentGalleryPage;
        // switch to previous page 
        var nextPage = currentGalleryPage - 1;
        // if next page numnber is negative we swtich to gallery last page 
        if(nextPage < 0)
        {
            nextPage = CG_PAGES_COUNT - 1;
        }
        // move page to start position
        $j(galleryPagesHandleList[nextPage]).css("left", -CG_PAGE_WIDTH);
        // hide current page with some animation 
        $j(galleryPagesHandleList[currentPage])
            .animate({left: -50}, 300, EASING_METHOD, 
                function()
                {
                    // when the first part of hide animation is end we show next page by slide animation
                    $j(galleryPagesHandleList[nextPage]).animate({left: 0}, 1300, EASING_METHOD);
                })
            // call second part of hide animatin 
            .animate({left: CG_PAGE_WIDTH}, 900, EASING_METHOD, 
                function()
                {
                    // seve next page index in global variable  
                    currentGalleryPage = nextPage;
                    // display page number
                    $j("#pageNumber").html("Page: " + (currentGalleryPage + 1) + "/");
                    // allow gallery page to flip 
                    canFlipGalleryPages = true; 
                });             
    } // end prevPage
               
} // end of function setupGalleryButtons


/***************************************
    CLASSIC GALLERY LIGHT BOX
****************************************/

// set prettyPhoto
function setupClassicGalleryLightBox()
{
    // we set pretty photo light box for every <a> element
    // which have attribute rel startet from string "prettyPhoto"
    // additionally:
    //      - we allow to resize image 
    //      - set the light box theme to light_rounded
    //      - set own separtor for page list
    //      - and allow to display title
    $j("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'light_rounded', 
        allowresize: true,
        counter_separator_label: '-',
        showTitle: true
    });
} // end of function setupClassicGalleryLightBox

/***************************************
    ADDITIONAL CUFON FONT REPLACEMENT
****************************************/

function setupAdditionalCufonFontReplacement()
{
    Cufon.replace(".galleryOtherHeader", {fontWeight: 300});
    Cufon.replace(".galleryListItemContainer h1", {fontWeight: 300});  
       
}  // end of function setupAdditionalCufonFontReplacement

/***************************************
    SET PAGE UP
****************************************/

function setupClassicImageGallery()
{
    setupClassicGalleryLightBox();
    setupAsynchronousThumbsLoading();
    setupSliderAndThumbs();
    setupAdditionalCufonFontReplacement();
} // end of function setupClassicImageGallery
    
/***************************************
    MAIN CODE - CALL THEN PAGE LOADED
****************************************/
       
// binding action to event onload page
$j(document).ready(
    function()
    {
        // common.js
        setupGlobal();
        setupCommunityButtons();            
        setupToolTipText();
        setupSearchBox();
        setupCufonFontReplacement();
        setupSideBarMiniSlider();
        setupSidebarTabsPanel();
        setupLoadingAsynchronousImages();
        setupToolTipImagePreview();
        setupTextLabelImagePreview();        
        // this file                
        setupClassicImageGallery();   
    }
);




    