/********************************************************************
    File:   
        services.js
    Brief:  
        Implementation of JavaScript functionality for 
        the services.html page
    Dependencies:
        jquery-1.3.2.min.js             (jQuery library)
        jquery.easing.1.2.js            (jQuery library plugin)
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
    ADD CUFON FONT REPLACEMENT
****************************************/

function setupAdditionalCufonFontReplacement()
{
    Cufon.replace(".featureTitle", {fontWeight: 400});
    Cufon.replace("#servicesBigInfo .title", {fontWeight: 300});
    Cufon.replace("#servicesSmallInfo .title", {fontWeight: 300});
} // end of function setupAddCufonFontReplacement
    
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
    }
);




    