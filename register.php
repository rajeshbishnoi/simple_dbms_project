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
  <li><a href="index.php">Login</a></li>
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
        <h1>Register</h1>
        
        <form class="form" method="post" action="register_backend.php">
            <input type="text" name="name" placeholder="name">
            <input type="email" name="email" placeholder="email">
            <input type="text" name="username" placeholder="username">
            
            <input type="password" placeholder="password" name="password">
            
            <input type="password" placeholder="Confirm-Password">
           <input type="text" name="use" placeholder="use"> 


            <label for="sel1">Click to  select the type of user</label>
            <select class="form-control" id="sel1" name="type">
              <option value="Student">Student</option>
              <option value="Govt. Official">Govt. Official</option>
              <option value="NGO">NGO</option>
              <option value="Others">Others</option>
            </select> 
            <label for="sel1">Remarks</label>
            <input type="textarea" name="remarks" placeholder="remarks">

            <button type="submit" name="submit" id="login-button"> Register </button>
        </form>
    </div>
    
    <ul class="bg-bubbles">
        <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
    </ul>

</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>


</body>
</html>


