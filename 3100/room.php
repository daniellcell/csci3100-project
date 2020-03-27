<html>
<head><title>JoinRoom</title></head>
<body>
    <?php
          $rid = $_POST['rid'];
	  $password = $_POST['password'];
    
    echo "Welcome to room" . $rid . "<br>"
    ?>
    <div id="rm">
			<p>
				<input type="button" value="Play" onClick="this.form.action='Play.php';this.form.submit();">
      	<input type="button" value="Leave" onClick="this.form.action='index.php';this.form.submit();">
			</p>
		</form>
</div>
</body>
</html>
