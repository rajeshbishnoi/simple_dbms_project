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
 $code = strip_tags($_POST['code']);
 $sem = strip_tags($_POST['sem']);
 $ct1 = strip_tags($_POST['ct1']);
 $ct2 = strip_tags($_POST['ct2']);
 $ct3 = strip_tags($_POST['ct3']);
 
$id = $DBcon->real_escape_string($id); 
$name = $DBcon->real_escape_string($name);
$code = $DBcon->real_escape_string($code);
$sem = $DBcon->real_escape_string($sem);
 $ct1 = $DBcon->real_escape_string($ct1);
 $ct2 = $DBcon->real_escape_string($ct2);
 $ct3 = $DBcon->real_escape_string($ct3);


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


 $query = "INSERT INTO grade(grade_id,grade_name,grade_ct1,grade_ct2,grade_ct3,grade_code,grade_sem) VALUES('$id','$name','$ct1','$ct2','$ct3','$code','$sem')";

  if ($DBcon->query($query)) {
   $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Marks Successfully Updated !
     </div>";
     header("Location:admin.php");
  }else {
   $msg = "<div class='alert alert-danger'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
     </div>";

     echo $msg;
  }
}
 
 $DBcon->close();

?>