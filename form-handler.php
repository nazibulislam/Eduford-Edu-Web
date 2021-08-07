<?php
	$name = $_POST['name'];
	$sender_email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$email_from = "info@eduford.com";
	
	$email_subject ="New Contact Form Submission";
	
	$email_body = "User Name: $name.\n".
				"User Email: $sender_email.\n".
				"Subject: $subject.\n".
				"User Message: $message .\n";
	
	$to = "ni.peal11@gmail.com";
	
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $sender_email \r\n";

	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: contact.html");

?>