<?php


//Construct message
$email_message = "From: ".$_POST['firstName']." ".$_POST['lastName']."\r\n".
                "E-mail address: ".$_POST['emailAddress']."\r\n".
                "Phone number: ".$_POST['phoneNumber']."\r\n".
                "Subject: ".$_POST['subject']."\r\n".
                $_POST['message']."\r\n";

$headerToBusiness = "From: $_POST[emailAddress]\r\n";
mail("food2uteam@gmail.com", $_POST['subject'], $email_message, $headerToBusiness);


$client_email_message = "To: ".$_POST['firstName']." ".$_POST['lastName']."\r\n".
                        "The following message from you was received by Food2U:\r\n\r\n".
                        $email_message.
                        "-------------------------\r\nWe would like to thank you for your feedback and business.\r\n".
                        "The Food2U team\r\n-------------------------\r\n";


if ($_POST['reply']){
  $client_email_message .="***We will contact you soon with further information.***";
}

$headerToClient = "From: food2uteam@gmail.com\r\n";
mail($_POST['emailAddress'], "Re: ".$_POST['subject'], $client_email_message, $headerToClient);


$display = str_replace("\r\n", "<br/>\r\n", $client_email_message);
$display = "<html><head><title>Your Message</title></head><body><tt>".
            $display.
            "</tt></body></html";



// $filename = "data/feedback.txt";

// $fileVar = fopen($filename, "a") or die("Error: Could not open the log file.");
// chmod($filename, 0777);

// fwrite($fileVar,"\n--------------------------------------------\n") or die("Error: Could not write to the log file.");

// fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n")) or die("Error: Could not write to the log file.");

// fwrite($fileVar, $email_message) or die("Error: Could not write to the log file.");



header('Location: feedback-confirmation.php');



?>
