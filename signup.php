<?php
  if(isset($_SESSION['name']))
  {
    header('location: /proj');
  }
  include('new_user.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Queue Waiting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body onload="startTime()">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Queue Waiting</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/proj"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ticket
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="create.php">Create</a></li>
          <li><a href="#">Modify</a></li>
        </ul>
      </li>
      <li><a href="services.html">Services</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">About Us</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
    	<li class="active"><a href="#">Sign Up</a></li>
      	<li><a href="login.php">Login</a></li>
    </ul>

    <form class="navbar-form navbar-right" action="/results.php">
    	<div class="form-group">
    		<input type="text" class="form-control" placeholder="Search">
    	</div>
    	<button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Sign Up</h1>
      <footer style="color: grey; font-style: italic;">All fields are required</footer>

      <form method="post" action="signup.php" class="signupform">
        <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <label for="fstname">First name:</label>
            <input type="text"  name="first_name" class="form-control" placeholder="First name">
          </div>
          <div class="col-lg-6">
            <label for="lastname">Last name:</label>
            <input type="text" name="last_name" class="form-control" placeholder="Last name">
          </div>
        </div>
      </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" name="email" class="form-control" placeholder="Enter your e-mail"required/>
        </div>

        <div class="form-group">
          <label for="phone">Password:</label>
          <input type="password" name="password" class="form-control" placeholder="Enter your password" required/>
        </div>

        <div class="form-group">
          <label for="phone">Phone number:</label>
          <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required/>
        </div>

        <button type="submit" class="btn btn-default btn-lg btn-register" name="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
  


</body>
</html>
