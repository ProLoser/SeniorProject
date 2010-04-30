/********************************************************************
    File:   
        contact.js
    Brief:  
        Implementation of JavaScript functionality for 
        the contact.html page
    Dependencies:
        jquery-1.3.2.min.js             (jQuery library)
        jquery.easing.1.2.js            (jQuery library plugin)
        cufon-yui.js                    (font replacement tool)
        sendMessage.php                 (php script used to send contact message via email) 
    Author:
        DigitalCavalry
    Author URI:
        http://graphicriver.net/user/DigitalCavalry
*********************************************************************/ 

// alias to jQuery library, function noConflict release control of the $ variable 
// to whichever library first implemented it
var $j = jQuery.noConflict();
// if true the send button is blocked
var g_blockSendButton = false;

/***************************************
    SETUP CONTACT FORM
****************************************/

function setupInputControls()
{
    // change border color wehen controls take focus
    $j(".commonInput, .commonTextarea, .contactInputHuman").focus(
        function()
        {
            $j(this).css("border", "1px solid #3399cc");
        }
    );
    
    // restore border color wehen controls lost focus
    $j(".commonInput, .commonTextarea, .contactInputHuman").blur(
        function()
        {
            $j(this).css("border", "1px solid #ccc");
            $j(this).css("border-right", "1px solid #eee");
            $j(this).css("border-bottom", "1px solid #eee");
        }
    );
    
    // when input name lost focus, validate the value
    $j("#inputName").blur(
        function()
        {
            if($j(this).val() != "")
            {
                $j("#contactNameErrorMsg").css("visibility", "hidden"); 
            } else
            {
                $j(this).css("border", "1px solid #FF0000");
                $j("#contactNameErrorMsg").html("&nbsp;please insert your name").css("visibility", "visible");            
            }
        }
    );
    
    // when input email lost focus validate the value 
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
                    $j("#contactEmailErrorMsg").html("&nbsp;sorry, but the email addres have bad format").css("visibility", "visible");
                } else
                {
                    $j("#contactEmailErrorMsg").css("visibility", "hidden");
                }
                
            } else
            {
                $j(this).css("border", "1px solid #FF0000");
                $j("#contactEmailErrorMsg").html("&nbsp;please insert your email adress").css("visibility", "visible"); 
            }
        }
    );
    
    // when input subject lost focus validate the value 
    $j("#inputSubject").blur(
        function()
        {
            if($j(this).val() != "")
            {
                $j("#contactSubjectErrorMsg").css("visibility", "hidden"); 
            } else
            {
                $j(this).css("border", "1px solid #FF0000");
                $j("#contactSubjectErrorMsg").html("&nbsp;you forgot to write an email subject").css("visibility", "visible");            
            }
        }
    );    

    // when input message lost focus validate the value 
    $j("#inputMessage").blur(
        function()
        {
            if($j(this).val() != "")
            {
                $j("#contactMessageErrorMsg").css("visibility", "hidden"); 
            } else
            {
                $j(this).css("border", "1px solid #FF0000");
                $j("#contactMessageErrorMsg").html("&nbsp;please input some text which you want send to us").css("visibility", "visible");            
            }
        }
    );
    
    // when input human lost focus validate the value 
    $j("#inputHuman").blur(
        function()
        {
            if(parseInt($j(this).val(), 10) == 4)
            {
                $j("#contactHumanErrorMsg").css("visibility", "hidden"); 
            } else
            {
                $j(this).css("border", "1px solid #FF0000");
                $j("#contactHumanErrorMsg").html("&nbsp;you really don't know?").css("visibility", "visible");            
            }
        }
    );         
    
} // end of function setupInputControl
    
function setupSendButton()
{
    $j("#contactSendButton").click(
        function()
        {
            // prevent multiple send call by user
            if(true == g_blockSendButton)
            {
                return;
            }
            
            g_blockSendButton = true;
            // get all data from contact form and save it in local variables
            var inputName = $j("#inputName").val();
            var inputEmail = $j("#inputEmail").val();
            var inputSubject = $j("#inputSubject").val();
            var inputMessage = $j("#inputMessage").val();
            var inputHuman = $j("#inputHuman").val();
           
            // create regular expression object
            var regExp = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9]([-a-z0-9_]?[a-z0-9])*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z]{2})|([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})(\.([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})){3})(:[0-9]{1,5})?$/i);
            // check email address, if result is null the email string dont match to pattern
            var resultExp = regExp.exec(inputEmail);
            // check user answer, resultHuman = true if ok, false if answer is bad
            var resultHuman = parseInt(inputHuman, 10) == 4;
            // check the error by logical sum
            var error = (resultHuman != true) || (resultExp == null) || (inputName == "") || (inputEmail == "") ||
                (inputSubject == "") || (inputMessage == "");

            // if there was an error we must display some informotion and mark
            // input cotrol with wrong data    
            if(error)
            {                
                $j("#contactNameErrorMsg").css("visibility", "hidden");
                $j("#contactEmailErrorMsg").css("visibility", "hidden");
                $j("#contactSubjectErrorMsg").css("visibility", "hidden");
                $j("#contactMessageErrorMsg").css("visibility", "hidden");
                $j("#contactHumanErrorMsg").css("visibility", "hidden");
                $j("#contactErrorPanel").slideUp(300);
                
                // errors processing
                if(inputName == "")
                {
                    $j("#inputName").css("border", "1px solid #FF0000");
                    $j("#contactNameErrorMsg").html("&nbsp;please insert your name").css("visibility", "visible");
                }
                if(inputEmail == "")
                {
                    $j("#inputEmail").css("border", "1px solid #FF0000");
                    $j("#contactEmailErrorMsg").html("&nbsp;please insert your email adress").css("visibility", "visible"); 
                } else                
                if(resultExp == null) 
                {
                    $j("#inputEmail").css("border", "1px solid #FF0000");
                    $j("#contactEmailErrorMsg").html("&nbsp;sorry, but the email addres have bad format").css("visibility", "visible");
                }
                if(inputSubject == "")
                {
                    $j("#inputSubject").css("border", "1px solid #FF0000");
                    $j("#contactSubjectErrorMsg").html("&nbsp;you forgot to write an email subject").css("visibility", "visible"); 
                }
                if(inputMessage == "")
                {
                    $j("#inputMessage").css("border", "1px solid #FF0000");
                    $j("#contactMessageErrorMsg").html("&nbsp;please input some text which you want send to us").css("visibility", "visible");
                }
                if(resultHuman != true)
                {
                    $j("#inputHuman").css("border", "1px solid #FF0000");
                    $j("#contactHumanErrorMsg").html("&nbsp;you really don't know?").css("visibility", "visible"); 
                }
                // unblock send button
                g_blockSendButton = false;                
            } else // if no error, if all data is set correctly
            {
                // let's define function called after ajax successfull call 
                function phpCallback(data)
                {   
                    // if success        
                    if(data == "ok")
                    {   
                        $j("#contactErrorPanel").text("");            
                        $j("#contactErrorPanel").css("background-color", "#ccFFcc");
                        $j("#contactErrorPanel").append("Yor email was sended.");
                        $j("#contactErrorPanel").css("border", "1px solid #339933");
                        $j("#contactErrorPanel").slideDown(300, function(){  g_blockSendButton = false;});
                        
                        $j("#inputName").val("");
                        $j("#inputEmail").val("");
                        $j("#inputSubject").val("");
                        $j("#inputMessage").val("");
                        $j("#inputHuman").val(""); 
                    } else // if error/problem during email sending in php script
                    {
                        $j("#contactErrorPanel").text("");
                        $j("#contactErrorPanel").css("background-color", "#FFcccc");
                        $j("#contactErrorPanel").css("border", "1px solid #993333");
                        $j("#contactErrorPanel").append("There was an error during email sending.");
                        $j("#contactErrorPanel").slideDown(300, function(){  g_blockSendButton = false;});               
                    }
                } // end of function phpCallback            
            
            
                // all data is correct so we can hide error/success panel
                $j("#contactErrorPanel").slideUp(300);
                
                // build data string for post call
                var data = "inputName="+inputName;
                data += "&"+"inputEmail="+inputEmail;
                data += "&"+"inputSubject="+inputSubject;
                data += "&"+"inputMessage="+inputMessage; 
                
                // try to send email via php script executed by server
                $j.post("php/contact/sendMessage.php", data, phpCallback, "text");
                // unblock send button
            } // end else all dara
        }
    );
} // end of function setupSendButton
    
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
        setupInputControls();
        setupSendButton();
    }
);




    