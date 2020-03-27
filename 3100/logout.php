<?php

session_start();

	if (isset($_SESSION['loginuser'])) {
		echo "You have logged out successfully.";
		echo '<form action="index.php" method="post"> <input type="submit" id="button" value="Return to Index"> </form>';
		session_destroy();
	} 
	
	else {
		echo "You haven't logged in..";
		echo '<form action="index.php" method="post"> <input type="submit" id="button" value="Return to Index"> </form>';
	}
?>
