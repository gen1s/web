<?php
$messageSent = false;
if(isset($_POST["email"]) && $_POST["email"] != ''){
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        
        $userName = $_POST["name"];
        $userEmail = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $to = "example@gmail.com";
        $body = "";

        $body .= "Form: " . $userName . "\r\n";
        $body .= "Email: " . $userEmail . "\r\n";
        $body .= "Message: " . $message . "\r\n";

        mail($to, $subject, $body);
        $messageSent = true; 
    }
}


?>