<?php
if(isset($_POST['signup-submit'])){
  require 'dbh.inc.php';

  $name=$_POST['name'];
  $email=$_POST['mail'];
  $pickup=$_POST['pickup'];
  $drop=$_POST['drop'];
  $date=$_POST['date'];
  $time=$_POST['time'];

  $sql="INSERT INTO book(name,emailUsers,pickLocation,dropLocation,userDate,userTime) VALUES(?,?,?,?,?,?)";
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: ../register.php?error=sqlerror");
    exit();
  }else{
    mysqli_stmt_bind_param($stmt,"ssssss",$name,$email,$pickup,$drop,$date,$time);
    mysqli_stmt_execute($stmt);
    header("Location: ../booknow.php?error=success");
    exit();
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
