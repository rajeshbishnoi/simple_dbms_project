<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
 // header("Location: index.php");
  // echo "session";
}
require_once 'db_connect.php';

if(isset($_POST['submit'])) {
   $id = strip_tags($_GET['id']);
 $name = strip_tags($_POST['name']);
 $uname = strip_tags($_POST['username']);
 $email = strip_tags($_POST['email']);
 $upass = strip_tags($_POST['password']);
 $usertype= strip_tags($_POST['type']);
 $use= strip_tags($_POST['use']);
 $remark= strip_tags($_POST['remarks']);


$id = $DBcon->real_escape_string($id); 
$name = $DBcon->real_escape_string($name);
 $uname = $DBcon->real_escape_string($uname);
 $email = $DBcon->real_escape_string($email);
 $upass = $DBcon->real_escape_string($upass);
 $usertype= $DBcon->real_escape_string($usertype);
 $use = $DBcon->real_escape_string($use);
 $remark = $DBcon->real_escape_string($remark);

  $datum = new DateTime();
  $startTime = $datum->format('Y-m-d H:i:s');

if ($usertype=="1") {
  $usertype="Student";
}
elseif ($usertype=="2") {
  $usertype="Govt.Official";
}
elseif($usertype=="3") {
  $usertype="NGO";
}
else{
  $usertype="other";
}


// $string = "Some text to be encrypted";
// $secret_key = "This is my secret key";

// $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);

// Encrypt $string
// $encrypted_string = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $secret_key, $upass, MCRYPT_MODE_CBC, $iv);

// Decrypt $string
// $decrypted_string = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $secret_key, $encrypted_string, MCRYPT_MODE_CBC, $iv);

 // $hashed_password = password_hash($upass, PASSWORD_DEFAULT); 
 
 // -- $check_email = $DBcon->query("SELECT user_email FROM user WHERE user_email='$email'");
 // $count=$check_email->num_rows;
 
 
  // $update="UPDATE user SET user_status='Approved' WHERE user_id='".$userid."'";
// $DBcon->query($update);

  $update="UPDATE user SET user_name = '".$name."', user_username = '".$uname."',user_password = '".$upass."',user_type = '".$usertype."',user_remark = '".$remark."' WHERE user_id = '".$id."'";
  // $DBcon->query($update);

  if (mysqli_query($DBcon,$update)) {
   $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
     </div>";
     // echo "this is update query";
     header("Location:admin.php");
  }else {
   $msg = "<div class='alert alert-danger'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
     </div>";
     echo $msg;
  }
  
 
 
 $DBcon->close();
}
?>