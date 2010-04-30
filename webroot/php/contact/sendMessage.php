<?php

/********************************************************************
    File:   
        sendMessage.php
    Brief:  
        Implementation of message sending by email for contact.html
    Author:
        DigitalCavalry
    Author URI:
        http://graphicriver.net/user/DigitalCavalry
*********************************************************************/ 

    // collect data from post table in local variables
    $inputName = $_POST["inputName"];
    $inputEmail = $_POST["inputEmail"];
    $inputSubject = $_POST["inputSubject"];
    $inputMessage = $_POST["inputMessage"];
 
    // prepare parameters for email function
    
    // change this email address to your, on which you want receive emails from site visitors
    $to      = "email@domain.com";  
    // email subject
    $subject = $inputSubject;
    // email message
    $message = $inputMessage;
    // header that descibe email
    $headers = "From: $inputName" . " <$inputEmail>" . "\r\n" .
               "Reply-To: " . "$inputEmail" . "\r\n" .
               "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // send email           
    $retVal = mail($to, $subject, $message, $headers);    
    
    // check mail return value, true - email was accepted to send, other false
    if($retVal)
    {
        // if true return text "ok"
        echo "ok";
    } else
    {
        // if false return text "error"
        echo "error";
    } 
    
?>