<?php
	include 'functions.php';

	if (!isset($_SESSION)) {
		session_start();
	}	
?>

<?=template_header('Rank')?>

<button onclick="window.location='index.php?page=game'">Return</button>
<h1>Leaderboard</h1>

<?php

?>


<?=template_footer()?>