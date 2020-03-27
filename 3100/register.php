<html>

<head>
<title>Register</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div id="frame1">
		<form action="process_r.php" method="post">
			<p>
				Username: <input name="username" id="username" type="text">
			</p>
			<p>
				Password: <input name="password" id="password" type="password">
			</p>
			<p>
				Re-enter Password: <input name="password2" id="password2" type="password">
			</p>
			<p>
				<input type="button" value="Return" onClick="this.form.action='login.php';this.form.submit();">
			</p>
			<p>
				<input type="submit" id="button" value="Register">
			</p>
		</form>
	</div>
</body>
</html>
