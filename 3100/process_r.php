<?php

session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	
	$con=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno($con)) 
	{ 
		echo "Failed to connect mySQL 1" . mysqli_connect_error(); 
	} 

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$password2 = stripcslashes($password2);
	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $password);
	$password2 = mysqli_real_escape_string($con, $password2);
	
	mysqli_select_db($con,"login");
	
	$result = mysqli_query($con,"select * from users where username = '$username'")
				or die("Failed to connect mySQL 2 ".mysqli_error($con));
	$row = mysqli_fetch_array($result);
	
	if (($row['username'] == $username && $row['username'] != '') || $username == ''){
		echo "Invalid username :(";
		echo '<form action="register.php" method="post"> <input type="submit" id="button" value="Try Again"> </form>';
	} elseif ($password != $password2) {
		echo "Password not the same";
		echo '<form action="register.php" method="post"> <input type="submit" id="button" value="Try Again"> </form>';
	} elseif ($password == '') {
		echo "Empty password";
		echo '<form action="register.php" method="post"> <input type="submit" id="button" value="Try Again"> </form>';
	} else {			
			$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
			if (mysqli_query($con, $sql) === TRUE) {
				$_SESSION['loginuser'] = $username;
				echo "Success! Welcome New User ".$username;
				echo '<form action="index.php" method="post"> <input type="submit" id="button" value="Return to Index"> </form>';
			} else {
				echo "Failed to add record ".mysqli_error($con);
			}
	}

	
?>
