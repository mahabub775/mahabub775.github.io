<?php
$name = $_POST['name'];
$Visitor_Email = $_POST['email'];
$Visitior_phone = $_POST['phone'];
$Message = $_POST['message'];

$email_form = 'mahabub12774@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name : $name .\n".
					"User Email : $Visitor_Email.\n".
					"User Phone : $Visitior_phone.\n".
					"User Message :$Message.\n";
					
					
	$to = "mahabub775@gmail.com";
	$headers = "From : $email_form \r\n";
	$headers .="Replay -To : $Visitor_Email \r\n";
	
	mail($to, $email_subject,$email_body,$headers);
	header("Location : index.html");
?>