<?php

$name=$_POST['name'];
$email=$_POST['email'];
$subject1=$_POST['subject'];
$message=$_POST['message'];
$formcontent="From: $name \n Email : $email \n Subject : $subject1 \n Message : $message";
$recipient = "ray.adarsh7@gmail.com";
$subject = "Personal Service Enquiry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";


?>