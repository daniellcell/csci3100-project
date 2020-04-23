<?=template_header('Game')?>
<?php
	include 'functions.php';

	if (!isset($_SESSION)) {
		session_start();
	}	
?>

<form class="box" method="post">
	<input type="button" value="Play with AI" onClick="this.form.action='play.php';this.form.submit();">
	<!--<input type="button" value="Join Room" onClick="this.form.action='join.php';this.form.submit();"-->
	<!--<input type="button" value="Play Randomly" onClick="this.form.action='random.php';this.form.submit();"-->
	<!--<input type="button" value="Return" onClick="this.form.action='index.php';this.form.submit();">-->
</form>

<?=template_footer()?>
