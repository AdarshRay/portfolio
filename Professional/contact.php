<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$formcontent="From: $name \n Email : $email \n Phone : $phone \n Message : $message";
$recipient = "ray.adarsh7@gmail.com";
$subject = "Professional Service Enquiry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";

?>