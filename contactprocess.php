<?php

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];;
    $formcontent = "From: $name \n Message: $message";
    $recipient = "fantastic_97@yahoo.com";

    $mailheader = "From: $email \r\n";

    $MSG = mail($recipient, $formcontent, $mailheader) or die("Error!");
    header('Location: index.html#contact');

    // print_r($MSG);
}
