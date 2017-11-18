<?php

// require_once "api.php";
require_once "db_connect.php";
include "session.php";


if($userid=$_GET["id"]){
$result = $DBcon->query("SELECT * FROM user WHERE user_id='$userid'");

$user=$result->fetch_array();
// define('username', $user);

$email=$user["user_email"];

$name=$user["user_name"];

$username=$user["user_username"];

$password=$user["user_password"];


	

// $result=$api->addUser($username,$password,$name,$email,array('Group 1'));

// $result=$api->addUser('username','password','name','email',array('Group 1'));


if($result['status']) {
    // Display result, and check if it's an error or correct response
    echo 'Success: ';
    echo $result['message'];
} else {
    // Something went wrong, probably connection issues
    echo 'Error: ';
    echo $result['message'];
}


$update="UPDATE user SET user_status='Approved' WHERE user_id='".$userid."'";
$DBcon->query($update);
}


if($nameuser=$_GET["username"]){	
$update="UPDATE user SET user_status='Disapproved' WHERE user_name='".$nameuser."'";
$DBcon->query($update);
}



header("Location: admin.php");

?>


