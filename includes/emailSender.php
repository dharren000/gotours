<?php
session_start();
if (isset($_POST["csubmit"])) {
	$name 		= $_POST['name'];
	$mailFrom	= $_POST['email'];
	$subject 	= "Contact Information: ".$_POST['subject'];
	$message 	= "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\nSubject: ".$_POST['subject']."\nMessage: ".$_POST['message'];
  $emailTo  = "isuretours@gmail.com";
	$headers  = 'From: '.$_POST['email'];

	if(!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){
		header("Location:../index.php?error=invalidEmail");
		exit();
	}
    if(mail($emailTo,$subject,$message,$headers)){
        header("Location:../index.php?mailSent");
    }else{
        header("Location:../index.php?error=unknownError");
        exit();
  }
}
