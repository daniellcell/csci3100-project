<?=template_header('Register')?>
<html>

<head>
<title>Register</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<form class="box" action="process_r.php" method="post">
	  <h1>Board Game Platform</h1>
	  <h2>registration</h2>
		  <input type="text" name="username" placeholder="Username (At most 10 characters)">
		  <input type="password" name="password" placeholder="Password (At most 15 characters)">
		  <input type="password" name="password2"  placeholder="Re-enter Password">
		  <input type="submit" value="Confirm">
		  <br>
		  <input type="button" value="Return" onClick="this.form.action='index.php';this.form.submit();">
	</form>
</body>
</html>
<?=template_footer()?>
