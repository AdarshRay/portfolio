<?php

$name=$_POST['name'];

$formcontent="From: $name";
$recipient = "ray.adarsh7@gmail.com";
$subject = "New Login";
$mailheader = "From: $name \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");


if (isset($_POST['submit'])) {
	
	$name=$_POST['name'];
	$visittype=$_POST['visittype'];

	if ($visittype=="Personal") {
		echo "<script>location.href = 'Personal/index.php'</script>";
	}
	elseif ($visittype=="Professional") {
		echo "<script>location.href = 'Professional/index.html'</script>";
	}
}
?>