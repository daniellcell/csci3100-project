<html>
<head><title>JoinRoom</title></head>
<body>
<div id="joinrm">
		<form action="room.php" method="post">
			<p>
        			Please enter room number and password(if any)<br>
				Room ID: <input name="rid" id="rid" type="text">
			</p>
			<p>
				Password: <input name="password" id="password" type="password">
			</p>
			<p>
				<input type="submit" id="button" value="Enter">
      				<input type="button" value="return" onClick="this.form.action='index.php';this.form.submit();">
			</p>
		</form>
</div>
</body>
</html>
