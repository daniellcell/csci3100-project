<?=template_header('Login')?>
<html>

<head>
<title>login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div id="frame1">
		<form action="process.php" method="post">
			<p>
				Username: <input name="username" id="username" type="text">
			</p>
			<p>
				Password: <input name="password" id="password" type="password">
			</p>
			<p>
				<input type="submit" id="button" value="Login">
				<input type="button" value="Return" onClick="this.form.action='index.php';this.form.submit();">
			</p>
			<p>
				Do not have an account? 
				<form method="post">
					<input type="button" value="Register" onClick="this.form.action='register.php';this.form.submit();">
				</form>
			</p>
		</form>
	</div>
</body>
</html>
<?=template_footer()?>
