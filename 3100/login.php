<?=template_header('Login')?>
<html>

<head>
<title>login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<form class="box" action="process.php" method="post">
	  <h1>Board Game Platform</h1>
		  <input type="text" name="username" placeholder="Username">
		  <input type="password" name="password" placeholder="Password">
		  <input type="submit" name="" value="Login">
		  <input type="button" value="Return" onClick="this.form.action='index.php';this.form.submit();">
			Do not have an account? 
			<form method="post">
					<input type="button" value="Register" onClick="this.form.action='register.php';this.form.submit();">
			</form>
	</form>

</body>
</html>
<?=template_footer()?>
