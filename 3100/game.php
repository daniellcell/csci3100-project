<?=template_header('Game')?>

<div id="frame2" style="text-align:center;height:50px;">
		<form method="post">
			<input type="button" value="Play" onClick="this.form.action='play.php';this.form.submit();">
			<input type="button" value="Join Room" onClick="this.form.action='join.php';this.form.submit();">
			<input type="button" value="Play Randomly" onClick="this.form.action='random.php';this.form.submit();">
			<input type="button" value="Return" onClick="this.form.action='index.php';this.form.submit();">
		</form>
</div>

<?=template_footer()?>
