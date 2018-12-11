<?php

$email_to = "benjamin.barratt@me.com";

$name = $_POST["ip"];

$email_from = $_POST["data"];

$message = $_POST[a];

$email_subject = "ip from website";

$headers = "From: " . $email_from . "\n";

$headers .= "Reply-To: " . $email_from . "\n";

$message = "Name: ". $name . "\r\nMessage: " . $message;


ini_set("sendmail_from", $email_from);

$sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);

if ($sent)

{
} else {

echo "There has been an error sending your comments. Please try later.";

}

?>
