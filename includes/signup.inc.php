<?php
if (isset($_POST['signup-submit'])) {
  require 'dbh.inc.php';

  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['mail'];
  $password=$_POST['pwd'];
  $passwordRepeat=$_POST['pwd-repeat'];

  if (empty($first_name)||empty($last_name)||empty($email)||empty($password)||empty($passwordRepeat)) {
    header("Location: ../register.php?error=emptyfields&first_name=".$first_name."&last_name=".$last_name."&mail=".$email);
    exit();
  }
  else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z]*$/",$first_name)&&!preg_match("/^[a-zA-Z]*$/",$last_name)){
    header("Location: ../register.php?error=invalidmail");
    exit();
  }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("Location: ../register.php?error=invalidmail&first_name=".$first_name."&last_name=".$last_name);
    exit();
  }else if(!preg_match("/^[a-zA-Z]*$/",$first_name)||!preg_match("/^[a-zA-Z]*$/",$last_name)){
    header("Location: ../register.php?error=invalidname&mail=".$email);
    exit();
  }else if($password!==$passwordRepeat){
    header("Location: ../register.php?error=passwordnotmatch&mail=".$email."&first_name=".$first_name."&last_name=".$last_name);
    exit();
  }else{
    $sql="SELECT emailUsers FROM users WHERE emailUsers=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location: ../register.php?error=sqlerror");
      exit();
    }else{
      mysqli_stmt_bind_param($stmt,"s",$email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck=mysqli_stmt_num_rows($stmt);
      if ($resultCheck>0) {
        header("Location: ../register.php?error=emailisalreadytaken&first_name=".$first_name."&last_name=".$last_name);
        exit();
      }else{
          $sql="INSERT INTO users(first_name,last_name,emailUsers,pwdUsers) VALUES(?,?,?,?)";
          $stmt=mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../register.php?error=sqlerror");
            exit();
          }else{
            $hashedPwd=password_hash($password,PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt,"ssss",$first_name,$last_name,$email,$hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../register.php?register=success");
            exit();
          }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else{
  header("Location: ../register.php");
  exit();
}
