<?php
	include 'functions.php';

	if (!isset($_SESSION)) {
		session_start();
	}	
?>

<?=template_header('Rank')?>

<button onclick="window.location='index.php?page=game'">Return</button>
<h1 style="font-size:35px;">Leaderboard</h1>
<br>

<style>
table { 
	text-align: center;
	vertical-align: middle;
	margin: auto;
}
</style>

<table id="matching">
	<caption>Matching</caption>
	<tr>
		<th>Rank</th>
		<th>Username</th>
		<th>Flips</th>
	</tr>
	<tr>
		<td>1</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>2</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>3</td>
		<td></td>
		<td></td>
	</tr>
</table>

<br><br>
<table id="chess">
	<caption>Connect Four</caption>
	<tr>
		<th>Rank</th>
		<th>Username</th>
		<th>Win %</th>
	</tr>
	<tr>
		<td>1</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>2</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>3</td>
		<td></td>
		<td></td>
	</tr>
</table>


<?php

?>


<?=template_footer()?>
