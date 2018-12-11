<?php
$email_to = "benjamin.barratt@me.com";
$name = $_POST["name"];
$email_from = $_POST["email"];
$message = $_POST["message"];
$email_subject = "Feedback from website";
$headers = "From: " . $email_from . "\n";
$headers .= "Reply-To: " . $email_from . "\n";
The code above sets the email address you will send your email to and gets the users' name, email address, and message from the previous form. It also sets the variables that contain the email subject, and headers to specify the from and reply to email addresses.
Now lets build the message of the email with the users' name and comments.
$message = "Name: ". $name . "\r\nMessage: " . $message;
Finally, let's send the email. If the email is sent we will go to a thank you page, if there is an error we will display a brief message.
ini_set("sendmail_from", $email_from);
$sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
if ($sent)
echo "thanks";
{
} else {
echo "There has been an error sending your comments. Please try later.";
}
?>
