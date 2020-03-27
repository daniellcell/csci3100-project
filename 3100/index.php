<?php

session_start();

if (isset($_SESSION['loginuser'])) {
	echo "Hello, ".$_SESSION['loginuser'];
}

?>

<html>
<head>
<title>Main Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="frame2" style="text-align:center;height:50px;">
		<form method="post">
			<input type="button" value="login" onClick="this.form.action='login.php';this.form.submit();">
			<input type="button" value="game" onClick="this.form.action='game.php';this.form.submit();">
			<input type="button" value="purchase" onClick="this.form.action='purchase.php';this.form.submit();">
			<input type="button" value="logout" onClick="this.form.action='logout.php';this.form.submit();">
		</form>
	</div>
		
</body>
</html>
