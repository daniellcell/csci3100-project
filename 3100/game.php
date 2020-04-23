<?=template_header('Game')?>
<?php
	if (!isset($_SESSION)) {
		session_start();
	}	
?>

<div id="frame1" style="text-align:center; vertical-align: middle; height:30px;">
		<form method="post">
			<input type="button" value="Play with AI" onClick="this.form.action='play.php';this.form.submit();">
			<!--<input type="button" value="Join Room" onClick="this.form.action='join.php';this.form.submit();"-->
			<!--<input type="button" value="Play Randomly" onClick="this.form.action='random.php';this.form.submit();"-->
			<input type="button" value="Rank" onClick="this.form.action='rank.php';this.form.submit();">
			<input type="button" value="Return" onClick="this.form.action='index.php';this.form.submit();">
		</form>
</div>

<?=template_footer()?>
