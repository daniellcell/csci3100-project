<?php

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$con=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno($con)) 
	{ 
		echo "Failed to connect mySQL" . mysqli_connect_error(); 
	} 

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $password);
	
	mysqli_select_db($con,"login");
	
	$result = mysqli_query($con,"select * from users where username = '$username' and password = '$password'")
				or die("Failed to connect mySQL ".mysqli_error($con));
	$row = mysqli_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password && $row['username'] != ''){
		echo "Success! Welcome User ".$row['username'];
	} else{
		echo "Wrong Username/Password";
	}
	
?>