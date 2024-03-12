<?php

$to = "ecare@mpsjhansi.org";
$subject = "New form submittion";

$name = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$msgcontent = $_POST["message"];

$message = "Name : " . $name . "\n" . "Email : " . $email . "\n" . "Contact :" . $contact . "\n" . "Message : " . $msgcontent;


// Sending Email

if(mail($to, $subject, $message)){
    echo 'Your  data has been sent successfully';
}
else{

    echo 'Unable to send email. Please try again';
}

?>