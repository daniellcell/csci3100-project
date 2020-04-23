<?php
	include 'functions.php';

	if (!isset($_SESSION)) {
		session_start();
	}	
?>

<?=template_header('Leaderboard')?>

<button onclick="window.location='index.php?page=game'">Return</button>
<h1 style="font-size:35px;">Top 3 Leaderboard</h1>
<br>

<style>
table { 
	text-align: center;
	vertical-align: middle;
	margin: auto;
}
caption {
	font-size: 23px;
}
</style>


<?php
	$con=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno($con)) 
	{ 
		echo "Failed to connect mySQL" . mysqli_connect_error(); 
	}
	mysqli_select_db($con, "game_rank");
	
	

	// table of matching	
	$sql = "SELECT * FROM matching ORDER BY cnt ASC LIMIT 3";
	$res = mysqli_query($con, $sql);
	
	$matching_name = array(NULL, NULL, NULL);
	$matching_cnt = array(NULL, NULL, NULL);
	$rowid = 0;
	if (mysqli_num_rows($res) > 0) {
		while($row = mysqli_fetch_assoc($res)) {
			$matching_name[$rowid] = $row["username"];
			$matching_cnt[$rowid] = $row["cnt"];
			$rowid++;
		}
	} 
	
	// table of chess	
	$sql = "SELECT * FROM chess ORDER BY (win/played) DESC, played DESC LIMIT 3";
	$res = mysqli_query($con, $sql);
	$chess_name = array(NULL, NULL, NULL);
	$chess_per = array(NULL, NULL, NULL);
	$rowid = 0;
	if (mysqli_num_rows($res) > 0) {
		while($row = mysqli_fetch_assoc($res)) {
			$chess_name[$rowid] = $row["username"];
			$chess_per[$rowid] = $row["win"]/$row["played"];
			$rowid++;
		}
	} 
?>

<table id="matching">
	<caption>Matching</caption>
	<tr>
		<th>Rank</th>
		<th>Username</th>
		<th>Flips</th>
	</tr>
	<tr id="1">
		<td>1</td>
		<td class="name"> <?php echo $matching_name[0];?> </td>
		<td class="stat"> <?php echo $matching_cnt[0];?> </td>
	</tr>
	<tr id="2">
		<td>2</td>
		<td class="name"> <?php echo $matching_name[1];?> </td>
		<td class="stat"> <?php echo $matching_cnt[1];?> </td>
	</tr>
	<tr id="3">
		<td>3</td>
		<td class="name"> <?php echo $matching_name[2];?> </td>
		<td class="stat"> <?php echo $matching_cnt[2];?> </td>
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
	<tr id="1">
		<td>1</td>
		<td class="name"> <?php echo $chess_name[0];?> </td>
		<td class="stat"> <?php echo round($chess_per[0]*100, 3);?> </td>
	</tr>
	<tr id="2">
		<td>2</td>
		<td class="name"> <?php echo $chess_name[1];?> </td>
		<td class="stat"> <?php echo round($chess_per[1]*100, 3);?> </td>
	</tr>
	<tr id="3">
		<td>3</td>
		<td class="name"> <?php echo $chess_name[2];?> </td>
		<td class="stat"> <?php echo round($chess_per[2]*100, 3);?> </td>
	</tr>
</table>


<?=template_footer()?>
