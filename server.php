<?php
	$firstname = "";
	$lastname = "";
	$username = "";
	$gender = "";
	$email = "";
	$errors = array();

	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// if the registration button is clicked
	if(isset($_POST["reg_user"])){
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// ensure that form fields are filled properly
		if(empty($firstname)){
			array_push($errors, "First name is required");
		}
		if(empty($lastname)){
			array_push($errors, "Last name is required");
		}
		if(empty($username)){
			array_push($errors, "Username is required");
		}
		if(empty($gender)){
			array_push($errors, "Gender is required");
		}
		if(empty($email)){
			array_push($errors, "Email is required");
		}
		if(empty($password_1)){
			array_push($errors, "Password is required");
		}

		if($password_1 != $password_2){
			array_push($errors, "Password don't match, Please try again");
		}

		// if there is no errors, save user to database
		if(count($errors) == 0){
			$password = $password_1; //encrypt password before storing in database(security)
			$sql = "INSERT INTO users(firstname, lastname, username, gender, email, password)
					VALUES('$firstname', '$lastname', '$username', '$gender', '$email', '$password')";

			mysqli_query($db, $sql);

			$_SESSION['username'] = $username;
			header('location: login.php'); // redirect to home page
		}
	}

	else if(isset($_POST['login_user'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if(empty($username)){
			array_push($errors, "Username is required");
		}

		if(empty($password)){
			array_push($errors, "Password is required");
		}

		if(count($errors) == 0){
			$password = $password; // encrypt password before comparing with that from database

			$query = "SELECT * FROM users WHERE  username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if(mysqli_num_rows($result) == 2){
				header('location: home.php');
			}
			else{
				array_push($errors, "Wrong username/password combination!");
			}
		}
	}
?>