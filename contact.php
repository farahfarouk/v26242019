<?php
$demoname = $_POST['demoname'];
$demoemail = $_POST['demoemail'];
$democategory = $_POST['democategory'];
$demomessage = $_POST['demomessage'];
$demohuman = $_POST['demohuman'];
$recipient = "farah_farouk@outlook.com";
$subject = "Contact Form";
$mailheader = " From: $demoname \n Message: $demomessage";
mail($recipient, $democategory, $demomessage, $demohuman) or die("Error!");
echo "Thank You!";
?>

