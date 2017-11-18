<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Report Card</title>
      <link rel="stylesheet" href="codepen/css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<style type="text/css">
  td{
    width: 150px;
    height: 50px;  
    text-align: center;
    font-size: 30px;
  }
  th{
    height: 50px;
    font-size: 35px;
    text-align: center;
  }
  h3{
    background-color: black;
    color: white;
    margin-bottom: 0px;
    margin-top: 0px;
    text-align: center;
    font-size: 50px;
  }
 body{
    background-image: url("https://www.w3schools.com/howto/img_girl.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
      }
</style>
</head>
<body>
  <html>
   
  <h3>Student Report Card</h3>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Report</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="check.php">Another Report</a></li>
      <li><a href="index.php">Admin Login</a></li>
      <li><a href="register.php">Register</a></li>
      <!-- <li><a href="#"></a></li> -->
    </ul>
  </div>
</nav>
  <?php


require_once 'db_connect.php';
// require_once 'session.php';
//MySqli Select Query
$id=$_GET['id'];
$results = $DBcon->query("SELECT * FROM grade WHERE grade_id=$id");
$row = $results->fetch_array();
{
// echo $row["grade_name"];
  ?>
    <table>
      <tr>
        <th colspan='2'>Course</th>
        <th rowspan='2'>Semester</th>
        
        <th colspan='3'>Marks</th>
      </tr>
      <tr>
        <th>Code</th>
        <th>Name</th>
        <th>CT1</th>
        <th>CT2</th>
        <th>CT3</th>
        <?php }
  print '<tr>';
  $total=$row["grade_ct1"]+$row["grade_ct2"]+$row["grade_ct3"];
        print'<td>'.$row["grade_code"].'</td>';
        print'<td>'.$row["grade_name"].'</td>';
        print'<td>'.$row["grade_sem"].'</td>';
        print'<td>'.$row["grade_ct1"].'</td>';
        print'<td>'.$row["grade_ct2"].'</td>';
        print'<td>'.$row["grade_ct3"].'</td>';
        
  print'</tr>';
  
    print '<tr>';
       print' <td colspan="3" class="boldright">Total</td>';
  
        // print'<td>'..'</td>';s 
        print'<td colspan="3">'.$total.'</td>';

     print' </tr>';
     ?>

               
    </tr>
  </table>
  
  
</body>
</html>
