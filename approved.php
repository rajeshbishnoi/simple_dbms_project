  <?php
  session_start();
if ($_SESSION['userSession']=="") {

  header("location:index.php");
}
require_once 'db_connect.php';

//MySqli Select Query
$results = $DBcon->query("SELECT user_id, user_email,user_name,user_username, user_type,created_at,user_status FROM user WHERE user_status='Approved'" );

// close connection 

$DBcon->close();
{ ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Openfire Users List</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <section>
  <!--for demo wrap-->
  <h1>Openfire Users List</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>User ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Username</th>
          <th>Type</th>
          <!-- <th>Approve <h6 style="font-size: 10px;">(Cilck to approve)</h6></th> -->
          <th>Created At</th>
          <th>Status</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
      <?php }
      while($row = $results->fetch_array()) {
        print '<tr>';
        $userid=$row["user_id"];
        $username=$row["user_name"];
        print '<td>'.$row["user_id"].'</td>';
        print '<td>'.$row["user_name"].'</td>'; 
        print '<td>'.$row["user_email"].'</td>';
        print '<td>'.$row["user_username"].'</td>';
        print '<td>'.$row["user_type"].'</td>';
        // print '<td><a href="approve.php?id='.$userid.'">Approve</a>     
        // <a href="approve.php?username='.$username.'">Disapprove</a></td>';  
        
        // print '<td><input type="checkbox" name="approve" value="approve">Approve</input>';  
        print '<td>'.$row["created_at"].'</td>';
        print '<td>'.$row["user_status"].'</td>';
        print '</tr>';

      } ?>
      </tbody>
    </table>
  </div>
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</body>
</html>