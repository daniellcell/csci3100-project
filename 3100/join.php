<div id="joinrm">
		<form action="process.php" method="post">
			<p>
        Please enter room number and password(if any)
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
    <?php
    $rid = $_POST['rid'];
	  $password = $_POST['password'];
    
    echo "Welcome to room" . rid . "<br>"
    ?>
	</div>
