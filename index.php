<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">

  <title>Admin</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <div class="admin-aside-panel">
<h4>Dashboard</h4>
<ul>
  <li><a href="index.php">Admin</a></li>
  <li><a href="register.php">Register</a></li>
  <li><a href="check.php">Check Report Card</a></li>     
  <!-- <li><a href="approved.php">Approved</a></li> -->
  <li><a href="logout.php">Logout</a></li>
</ul>
<i class="icon fa fa-chevron-right closed"> </i>
</div> 
<!-- End of the sidebar here -->

<div class="wrapper">


    <div class="container">
        <h1>ADMIN Login</h1>
        
        <form class="form" method="post" action="login.php" autocomplete="off">
            <input type="text" autocomplete="off" placeholder="Username" name="username" required/>
            <input type="password" autocomplete="off" placeholder="Password" name="password" required/>
            <button type="submit" name="submit" id="login-button">Login</button>
        </form>


    </div>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Only the Administrator can login .</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Students kindly use the register page</p>
    
    <ul class="bg-bubbles">
        <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
    </ul>


</div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>


