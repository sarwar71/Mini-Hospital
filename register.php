<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
 	<title>Registration Page</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="title">
      <h1>Welcome To Mini Hospital</h1>
  </div>
 	<div class="header">
  		<h2>Register</h2>
 	</div>
 	<form method="post" action="register.php">
    <!-- display validation errors here -->
    <?php include('errors.php'); ?>

  		<div class="input-group">
  		    <label>First Name</label>
  	  	  <input type="text" name="firstname" value="<?php echo $firstname ?>" placeholder="Enter First Name">
  		</div>
  		<div class="input-group">
  		    <label>Last Name</label>
  			  <input type="text" name="lastname" value="<?php echo $lastname  ?>" placeholder="Enter Last Name">
  		</div>
  		<div class="input-group">
  	  		<label>Username</label>
  	  		<input type="text" name="username" value="<?php echo $username ?>" placeholder="Enter Username">
  		</div>
      <div class="input-group">
          <label>Gender</label>
          <input type="text" name="gender" value="<?php echo $gender ?>" placeholder="Enter Male/Female">
      </div>
  		<div class="input-group">
  	  		<label>Email</label>
  	  		<input type="email" name="email" value="<?php echo $email ?>" placeholder="Enter Email">
  		</div>
  		<div class="input-group">
  	  		<label>Password</label>
  	  		<input type="password" name="password_1" placeholder="Enter Password">
  		</div>
  		<div class="input-group">
  	  		<label>Confirm Password</label>
  	  		<input type="password" name="password_2" placeholder="Enter Confirm Password">
  		</div>
  		<div class="input-group">
  	  		<button type="submit" class="btn" name="reg_user">Register</button>
  		</div>
  		<p class="member">
  			 Already a member? <a href="index.php">Login</a>
  		</p>
  	</form>
</body>
</html>