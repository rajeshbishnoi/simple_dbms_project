<!-- This page is the one that the student uses to check their marks -->
<html>
<title>Form register</title>
  <head>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
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
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Check</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Check Report Card</a></li>
      <li><a href="index.php">Admin Login</a></li>
      <li><a href="register.php">Register</a></li>
      <!-- <li><a href="#"></a></li> -->
    </ul>
  </div>
</nav>
     <div class="container-fluid">
    <section class="container">
    <div class="container-page">        
      <div class="col-md-6">
        <h3 class="dark-grey">Check Report Card</h3>
        <form class="form" method="post" action="reportcard.php">
        


        <div class="form-group col-lg-12">
          <label>Username</label>
          <input type="text" name="username" class="form-control" placeholder="name">
          <!-- <input type="" name="" class="form-control" id="" value=""> -->
        </div>

      
        
        <div class="form-group col-lg-6">
          <label>Password</label>
          <input type="password" placeholder="password" class="form-control"  name="password">
          <!-- <input type="password" name="" class="form-control" id="" value=""> -->
        </div>
                  
                  <div class="form-group col-lg-6">
               <p>
                 <div class="col-sm-2">
                <button type="submit" name="submit" class="btn btn-primary">Check Report Card</button>
                </div>
                </p>
              </div>
      
      </form>
      </div>

  </section>
</div> 
  </body>
</html>

