<?php
session_start();

require_once 'db_connect.php';

if (isset($_SESSION['userSession'])!="") {
 header("Location: home.php");
 exit;
}

if (isset($_POST['submit'])) {
 
 $username = strip_tags($_POST['username']);
 $password = strip_tags($_POST['password']);
 
 $password = $DBcon->real_escape_string($username);
 $password = $DBcon->real_escape_string($password);
 
 $query = $DBcon->query("SELECT login_username, login_password FROM user WHERE user_username='$username' AND user_password='$password'");
 $row=$query->fetch_array();
 
 $count = $query->num_rows; // if email/password are correct returns must be 1 row
 
 if ($count==1) {
  $_SESSION['userSession'] = $row['user_id'];
  // header("Location: home.php");
  echo $row;
 } else {
  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
    </div>";
 }
 $DBcon->close();
}
?>