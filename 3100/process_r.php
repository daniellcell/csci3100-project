<?php

if (!isset($_SESSION)) {
    session_start();
}

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
		echo "<script>
		alert('Username is invalid / already been used!');
		window.location.href='index.php?page=register';
		</script>";
	} elseif ($password != $password2) {
		echo "<script>
		alert('Passwords are not the same!');
		window.location.href='index.php?page=register';
		</script>";
	} elseif ($password == '' || $password2 == '') {
		echo "<script>
		alert('Empty Password!');
		window.location.href='index.php?page=register';
		</script>";
	} else {			
			$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
			if (mysqli_query($con, $sql) === TRUE) {
				$_SESSION['loginuser'] = $username;
				echo "<script>
				alert('Success! Welcome New User {$row['username']}');
				window.location.href='index.php?page=home';
				</script>";
			} else {
				echo "Failed to add record ".mysqli_error($con);
			}
	}

	
?>
