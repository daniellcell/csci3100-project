<?=template_header('Logout')?>
<?php

	if (isset($_SESSION['loginuser'])) {
		echo "<script>
		alert('You have logged out successfully!');
		window.location.href='index.php?page=home';
		</script>";
		session_destroy();
	} else {
		echo "<script>
		alert('You haven\'t logged in!');
		window.location.href='index.php?page=home';
		</script>";
	}
?>

<?=template_footer()?>
