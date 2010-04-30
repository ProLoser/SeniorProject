/********************************************************************
    File:   
        postPage.js
    Brief:  
        Implementation of JavaScript functionality for 
        the postPage.html page
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
    SETUP LEAVE COMMENT FORM
****************************************/

function setupInputControls()
{
    // change border color wehen controls take focus
    $j(".commonInput, .commonTextarea").focus(
        function()
        {
            $j(this).css("border", "1px solid #3399cc");
        }
    );
    
    // restore border color wehen controls lost focus
    $j(".commonInput, .commonTextarea").blur(
        function()
        {
            $j(this).css("border", "1px solid #ccc");
            $j(this).css("border-right", "1px solid #eee");
            $j(this).css("border-bottom", "1px solid #eee");
        }
    );
    
    // then input name lost focus we validate its value
    $j("#inputName").blur(
        function()
        {
            if($j(this).val() != "")
            {
                $j("#postNameErrorMsg").css("visibility", "hidden"); 
            } else
            {
                $j(this).css("border", "1px solid #FF0000");
                $j("#postNameErrorMsg").html("&nbsp;please insert your name").css("visibility", "visible");            
            }
        }
    );
    
    // then input email lost focus we validate its value
    $j("#inputEmail").blur(
        function()
        {            
            if($j(this).val() != "")
            {
                // create regular expression object
                var regExp = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9]([-a-z0-9_]?[a-z0-9])*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z]{2})|([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})(\.([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})){3})(:[0-9]{1,5})?$/i);
                // check email address, if result is null the email string dont match to pattern
                var resultExp = regExp.exec($j(this).val());
                if(resultExp == null) 
                {
                    $j(this).css("border", "1px solid #FF0000");
                    $j("#postEmailErrorMsg").html("&nbsp;sorry, but the email addres have bad format").css("visibility", "visible");
                } else
                {
                    $j("#postEmailErrorMsg").css("visibility", "hidden");
                }
                
            } else
            {
                $j(this).css("border", "1px solid #FF0000");
                $j("#postEmailErrorMsg").html("&nbsp;please insert your email adress").css("visibility", "visible"); 
            }
        }
    );
    
    // then input message lost focus we validate its value
    $j("#inputMessage").blur(
        function()
        {
            if($j(this).val() != "")
            {
                $j("#postMessageErrorMsg").css("visibility", "hidden"); 
            } else
            {
                $j(this).css("border", "1px solid #FF0000");
                $j("#postMessageErrorMsg").html("&nbsp;please input some text wich you want send to us").css("visibility", "visible");            
            }
        }
    );             
} // end of function setupInputControl


function setupSendButton()
{
    $j("#postSendButton").click(
        function()
        {

            // get all data from post form and save it in local variables
            var inputName = $j("#inputName").val();
            var inputEmail = $j("#inputEmail").val();
            var inputWebsite = $j("#inputWebsite").val(); 
            var inputMessage = $j("#inputMessage").val();
           
            // create regular expression object
            var regExp = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9]([-a-z0-9_]?[a-z0-9])*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z]{2})|([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})(\.([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})){3})(:[0-9]{1,5})?$/i);
            // check email address, if result is null the email string dont match to pattern
            var resultExp = regExp.exec(inputEmail);
            // check the error by logical sum
            var error = (resultExp == null) || (inputName == "") || (inputEmail == "") || (inputMessage == "");

            // if there was an error we must display some informotion and mark
            // input cotrol with wrong data    
            if(error)
            {                
                $j("#contactNameErrorMsg").css("visibility", "hidden");
                $j("#contactEmailErrorMsg").css("visibility", "hidden");
                $j("#contactMessageErrorMsg").css("visibility", "hidden");
                
                // errors processing
                if(inputName == "")
                {
                    $j("#inputName").css("border", "1px solid #FF0000");
                    $j("#postNameErrorMsg").html("&nbsp;please insert your name").css("visibility", "visible");
                }
                if(inputEmail == "")
                {
                    $j("#inputEmail").css("border", "1px solid #FF0000");
                    $j("#postEmailErrorMsg").html("&nbsp;please insert your email adress").css("visibility", "visible"); 
                } else                
                if(resultExp == null) 
                {
                    $j("#inputEmail").css("border", "1px solid #FF0000");
                    $j("#postEmailErrorMsg").html("&nbsp;sorry, but the email addres have bad format").css("visibility", "visible");
                }
                if(inputMessage == "")
                {
                    $j("#inputMessage").css("border", "1px solid #FF0000");
                    $j("#postMessageErrorMsg").html("&nbsp;please input some text wich you want send to us").css("visibility", "visible");
                }                
            } else // if no error, if all data is set correctly
            {                                    
                $j("#inputName").val("");
                $j("#inputEmail").val("");
                $j("#inputWebsite").val("");
                $j("#inputMessage").val("");            
            } // end else all data correctly
        }
    );
} // end of function setupSendButton
    
/***************************************
    CUFON SETTINGS
****************************************/

function setupAdditionalCufonFontReplacement()
{
    Cufon.replace(".postRecentTitle", {fontWeight: 300}); 
} // end of function setupAdditionalCufonFontReplacement    
    
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
        setupLinkLightBox();
        setupSidebarTabsPanel();
        setupLoadingAsynchronousImages();
        setupToolTipImagePreview();
        setupTextLabelImagePreview();
        setupFaderMoverSlider(); 
        // this file
        setupInputControls();
        setupSendButton();
        setupAdditionalCufonFontReplacement();
    }
);




    