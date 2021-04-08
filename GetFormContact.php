<?php
    //Retrieve field values from the server:
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    //Server-side error checks:
    $errorCount = 0;
    $errorMsg = "";

    if ($email == "") {$errorCount++; $errorMsg = "An email is required";}
    if ($subject == "") {$errorCount++; $errorMsg = "A subject is required";}
    if ($message == "") {$errorCount++; $errorMsg = "A message is required";}
   
    if($errorCount > 0) {
        echo "Errors detected: $errorMsg";
    }
    else {
        echo "Thank you for your message! You can expect to hear back from us within 2-3 business days.";
    }
?>