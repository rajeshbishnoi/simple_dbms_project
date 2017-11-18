<?php

// $results = $mysqli->query("DELETE FROM products WHERE added_timestamp < (NOW() - INTERVAL 1 DAY)");

// if($results){
//     print 'Success! deleted one day old records'; 
// }else{
//     print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
// }

require_once('db_connect.php');
if (!isset($_GET['id'])) {
	header("Location:admin.php");
	# code...
}
$id=$_GET['id'];
$del="DELETE FROM user WHERE user_id='".$id."' ";
if(mysqli_query($DBcon,$del)){
	header("Location:admin.php");
}
else
	echo "Error WHILE DELETING THE RECORD";

?>