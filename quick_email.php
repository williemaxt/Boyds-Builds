<?php
if(isset($_POST['email'])) {

    // Show the email being sent to and a subject for the message
    $email_to = "boydsbuildspc@gmail.com";
    $email_subject = "New Build Order From Website";

    function died($error) {
        // error code
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }




    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";



    if(strlen($comments) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }



    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

// create email headers
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>
    <!--Thankyou page code -->
    <html>
    <head>
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Contact</title>
        <link rel="stylesheet" href="css/main.css">
        <style>
            h1{
                text-align: center;
                color: #ffffff;
                max-width: 500px;
                margin-top: 100px;
            }
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
    <h1 class="aboutus">Thanks for contacting us. We'll email you shortly at: <?php echo $email_from;?> </h1>
    <a href="index.html">Go Back To home</a>
    </body>
    </html>

    <?php

}
?>