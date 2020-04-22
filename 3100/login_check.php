<?=template_header('Login')?>
<?php

session_start();

	if (isset($_SESSION['loginuser'])) {
		echo "You have already logged in!";
		echo '<form action="index.php" method="post"> <input type="submit" id="button" value="Return to Index"> </form>';
	} 
	
	else {
		// if not yet logged in, redirect to login page
		header("Location: index.php?page=login");
	}
?>
<?=template_footer()?>
