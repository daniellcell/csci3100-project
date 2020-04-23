<?php
	include 'functions.php';

	if (!isset($_SESSION)) {
		session_start();
	}	
?>

<?=template_header('Play')?>

<form class="box" method = "post">
	<h2>Please choose game that you want to play with computer:)<br>
		If you want to submit result after playing, remember to login first.
	</h2>
	<p>
		<input type="button" value="Matching" onClick="this.form.action='game_matching.php';this.form.submit();">
		<input type="button" value="Chess" onClick="this.form.action='game_chess.php';this.form.submit();">
		<input type="button" value="Leave" onClick="this.form.action='index.php';this.form.submit();">
	</p>
</form>

<?=template_footer()?>
