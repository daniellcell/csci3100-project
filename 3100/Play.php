<?php
include 'functions.php';
?>

<?=template_header('Play')?>

<html>
<head>
<title>Play</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div style="text-align:center;">
	Please choose game that you want to play with computer:)
	<div id="play">
		<form method = "post">
			<p>
			<input type="button" value="Matching" onClick="this.form.action='game_matching.php';this.form.submit();">
			<input type="button" value="Chess" onClick="this.form.action='game_chess.php';this.form.submit();">
			<input type="button" value="Leave" onClick="this.form.action='index.php';this.form.submit();">
			</p>
		</form>
	</div>
	</div>
		
</body>
</html>

<?=template_footer()?>
