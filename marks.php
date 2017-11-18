<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Marks</title>

</head>

<body>
  <html>
  <head>
    <title>Marks Update</title>
    

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <style type="text/css">
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
     <div class="container-fluid">
    <section class="container">
    <div class="container-page">        
      <div class="col-md-6">
        <h3 class="dark-grey">Registration</h3>
        <?php 
        if (!isset($_GET['id'])) {
          # code...
          header("Location:admin.php");
        }

          require_once 'db_connect.php';
  
  $id=$_GET['id'];

  $result = $DBcon->query("SELECT * FROM user WHERE user_id=".$id." ");

$row=$result->fetch_array();
// $email=$user["user_email"];

$name=$row["user_name"];

$username=$row["user_username"];

$password=$row["user_password"];
$remarks=$row["user_remark"];

echo'
<form class="form" method="post" action=" marks_update.php?id='.$id.' ">


        <div class="form-group col-lg-12">
          <label>Name</label>
          <input type="" name="name" class="form-control" id="" value="'.$name.'">
        </div>

        <div class="form-group col-lg-12">
          <label>SEMESTER</label>
          <input type="" name="sem" class="form-control" id="" value="">
        </div>

        <div class="form-group col-lg-12">
           <label>COURSE CODE</label>
          <input type="" name="code" class="form-control" id="" value="">
        </div>

        <div class="form-group col-lg-12">
          <label>CT1 MARKS</label>
          <input type="" name="ct1" class="form-control" id="" value="">
        </div>
        
        <div class="form-group col-lg-6">
          <label>CT2 MARKS</label>
          <input type="" name="ct2" class="form-control" id="" value="">
        </div>

        <div class="form-group col-lg-6">
          <label>CT3 MARKS</label>
          <input type="" name="ct3" class="form-control" id="" value="">
        </div>
             

        <p>
                 <div class="col-sm-2">
                <button type="submit" name=" submit"class="btn btn-primary">Update</button>
                </div>
        </p>
      </form>';
      ?>
      </div>

    </div>
  </section>
</div> 
  </body>
</html>
  
  
</body>
</html>
