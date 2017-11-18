<!-- this page is redirected from check.php
to check about the login credentials -->
<?php
// include "session.php";

require_once 'db_connect.php';

// if (isset($_SESSION['userSession'])) {

//  header("Location: approve.php");

//  exit;
// }

if (isset($_POST['submit'])) {

 $username = $_POST['username'];
 $password = $_POST['password'];
 
 // $username = strip_tags($_POST['username']);
 // $password = strip_tags($_POST['password']);
 
 // $password = $DBcon->real_escape_string($username);
 // $password = $DBcon->real_escape_string($password);
 
 $query = $DBcon->query("SELECT user_id, user_name FROM user WHERE user_username='$username' AND user_password='$password'");

 $row=$query->fetch_array();
 
 $count = $query->num_rows; // if email/password are correct returns must be 1 row
 
 if ($count==1) {
 	// session_start();
  // $_SESSION['userSession'] = $row['login_username'];

  header("Location: card.php?id=".$row["user_id"]."");
  // echo $row;
 }
  else {
  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
    </div>";
    echo $msg;
 }

 $DBcon->close();
}
?><!-- kayalbizhi.r@ktrsrmunic.ac.in -->
