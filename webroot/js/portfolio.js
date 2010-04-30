/********************************************************************
    File:   
        portfolio.js
    Brief:  
        Implementation of JavaScript functionality for 
        the portfolio.html page
    Dependencies:
        jquery-1.3.2.min.js             (jQuery library)
        jquery.easing.1.2.js            (jQuery library plugin)
    Author:
        DigitalCavalry
    Author URI:
        http://graphicriver.net/user/DigitalCavalry
*********************************************************************/ 

// alias to jQuery library, function noConflict release control of the $ variable 
// to whichever library first implemented it
var $j = jQuery.noConflict();

/***************************************
    ADDITIONAL CUFON FONT REPLACEMENT
****************************************/

function setupAdditionalCufonFontReplacement()
{
    Cufon.replace(".portfolioProjectWrapper .title", {fontWeight: 700});
    Cufon.replace(".portfolioOtherHeader", {fontWeight: 300});       
}  // end of function setupAdditionalCufonFontReplacement

/***************************************
    SLIDER SETUP
****************************************/

// number of slider pages in portfolio
var PF_PAGES_COUNT = 0;
// nice easing method for gallery page slide
var EASING_METHOD = "easeOutCirc";    
// number of projects in portfolio
var PF_PROJECTS_COUNT = 0;
// width of single portfolio page
var PF_PAGE_WIDTH = 960;
// index of current portfolio page in view 
var g_currentPortfolioPage = 0;
// array of portfolio pages handle
var g_portfolioPagesHandleList = new Array();
// can flip page true/false
var g_canFlipPortfolioPages = true;

function setupSliderAndThumbs()
{
    // get the number of portfolio pages and save it in global variable
    PF_PAGES_COUNT = $j("#portfolioContainer .portfolioPage").length;
    // display number of pages
    $j("#pageNumber").html("Page: 1/");
    $j("#pageCount").html(PF_PAGES_COUNT);
    
    // save all pages handle in global array, 
    // first we must get the handle of first page in portfolio
    var firstPage = $j("#portfolioContainer .portfolioPage:first");
    // and now we must walk across every page in loop
    for(var i = 0; i < PF_PAGES_COUNT; i++)
    {
        // calculate and set left position for page
        var left = i*PF_PAGE_WIDTH;
        $j(firstPage).css("left", left);
        // save page handle in array
        g_portfolioPagesHandleList.push(firstPage);
        // get the next page
        firstPage = $j(firstPage).next(".portfolioPage");    
    } // for loop end   
         
    // get the numner of portfolio projects and save it in global variable
    PF_PROJECTS_COUNT = $j(".portfolioProjectWrapper").length;
    // display number of thumbs
    $j("#numberOfImages").html(PF_PROJECTS_COUNT);
    
    // set hover action for gallery thumb
    $j(".portfolioProjectWrapper").hover(
        function()
        {
            // get the index of hovered thumb
            var index = $j("#portfolioContainer .portfolioProjectWrapper").index(this);
            
            // display index
            $j("#hoveredImageIndex").html("Project: " +(index + 1) + "/");
        },
        function()
        {
        }
    );
    
    // set buttons 
    setupPortfolioButtons();    
} // end of function setupSliderAndThumbs


function setupPortfolioButtons()
{
    // set click action for next page button
    $j("#portfolioNextPageBtn").click(function(){nextPage();});  
    // set click action for prev page button  
    $j("#portfolioPrevPageBtn").click(function(){prevPage();});

    function nextPage()
    {
        // the portfolio have less then 2 pages or
        // page flip is blockec we end function call
        if((PF_PAGES_COUNT < 2) || g_canFlipPortfolioPages == false)
        {
            return;
        }
        
        // prevent portfolio page flip
        g_canFlipPortfolioPages = false;
        // get current page
        var currentPage = g_currentPortfolioPage;
        // switch to next page
        var nextPage = g_currentPortfolioPage+1;
        // if next page numnber is to big we go back to first page
        if(nextPage > (PF_PAGES_COUNT - 1))
        {
            nextPage = 0;
        }
        // move page to start position
        $j(g_portfolioPagesHandleList[nextPage]).css("left", PF_PAGE_WIDTH);
        // hide current page with some animation
        $j(g_portfolioPagesHandleList[currentPage])
            .animate({left: 50}, 300, EASING_METHOD, 
                function()
                {
                    // when the first part of hide animation is end we show next page by slide animation
                    $j(g_portfolioPagesHandleList[nextPage]).animate({left: 0}, 1300, EASING_METHOD);
                })
            // call second part of hide animatin 
            .animate({left: -PF_PAGE_WIDTH}, 900, EASING_METHOD, 
                function()
                {
                    // seve next page index in global variable
                    g_currentPortfolioPage = nextPage;
                    // display page number 
                    $j("#pageNumber").html("Page: " + (g_currentPortfolioPage + 1) + "/");
                    // allow portfolio page to flip   
                    g_canFlipPortfolioPages = true; 
                });
         
    }


    function prevPage()
    {
        // the portfolio have less then 2 pages or
        // page flip is blocked we end function call        
        if((PF_PAGES_COUNT < 2) || g_canFlipPortfolioPages == false)
        {
            return;
        }
        
        // prevent portfolio page flip  
        g_canFlipPortfolioPages = false;
        // get current page  
        var currentPage = g_currentPortfolioPage;
        // switch to previous page 
        var nextPage = g_currentPortfolioPage - 1;
        // if next page numnber is negative we swtich to gallery last page 
        if(nextPage < 0)
        {
            nextPage = PF_PAGES_COUNT - 1;
        }
        // move page to start position
        $j(g_portfolioPagesHandleList[nextPage]).css("left", -PF_PAGE_WIDTH);
        // hide current page with some animation 
        $j(g_portfolioPagesHandleList[currentPage])
            .animate({left: -50}, 300, EASING_METHOD, 
                function()
                {
                    // when the first part of hide animation is end we show next page by slide animation
                    $j(g_portfolioPagesHandleList[nextPage]).animate({left: 0}, 1300, EASING_METHOD);
                })
            // call second part of hide animatin 
            .animate({left: PF_PAGE_WIDTH}, 900, EASING_METHOD, 
                function()
                {
                    // seve next page index in global variable  
                    g_currentPortfolioPage = nextPage;
                    // display page number
                    $j("#pageNumber").html("Page: " + (g_currentPortfolioPage + 1) + "/");
                    // allow gallery page to flip 
                    g_canFlipPortfolioPages = true; 
                });             
    }
        
} // end of function setupPortfolioButtons


/***************************************
    SET PAGE UP
****************************************/

function setupPortfolio()
{
    setupSliderAndThumbs();
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
        setupMultiImageLightBox();
        setupSidebarTabsPanel();
        setupLoadingAsynchronousImages();
        setupToolTipImagePreview();
        setupTextLabelImagePreview();         
        // this file
        setupAdditionalCufonFontReplacement();
        setupPortfolio();
    }
);




    