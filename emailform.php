<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
?>

<?php
	$email_from = 'hatchplugg78@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".

                            "Message:\n $message".
?>

<?php

  $to = "hatchplugg78@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>