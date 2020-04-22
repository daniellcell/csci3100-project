<?=template_header('Login')?>
<?php

if (!isset($_SESSION)) {
    session_start();
}

	if (isset($_SESSION['loginuser'])) {
		echo "<script>
		alert('You have already logged in!');
		window.location.href='index.php?page=home';
		</script>";
	} 
	
	else {
		// if not yet logged in, redirect to login page
		header("Location: index.php?page=login");
	}
?>
<?=template_footer()?>
