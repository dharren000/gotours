<?php
if(isset($_POST['submit'])){
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  $mailTo="";
  $headers="From: ".$email;
  $txt="You have received an e-mail from ".$first_name." ".$last_name.".\n\n".$message;

  mail($mailTo,"",$txt,"$headers");
  header("Location: contact.php?mailsend");



}


 ?>
