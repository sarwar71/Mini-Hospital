<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
 	<title>Login Page</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="title">
  		<h1>Welcome To Mini Hospital</h1>
 	</div>
 	<div class="header">
  		<h2>Login</h2>
 	</div>
 	<form method="post" action="index.php">
    <!-- display validation errors here -->
    <?php include('errors.php'); ?>
  		<div class="input-group">
  	  		<label>Username</label>
  	  		<input type="text" name="username" placeholder="Enter Username">
  		</div>
  		<div class="input-group">
  	  		<label>Password</label>
  	  		<input type="password" name="password" placeholder="Enter Password">
  		</div>
  		<div class="input-group">
  	  		<button type="submit" class="btn" name="login_user">Login</button>
  		</div>
  		<p class="member">
  			Yet not a member? <a href="register.php">Registration</a>
  		</p>
  	</form>
</body>
</html>