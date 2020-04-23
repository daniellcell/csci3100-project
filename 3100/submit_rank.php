<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	if (isset($_SESSION['loginuser'])) {
		// if logged in, can submit rank to database
		// after submission, back to ../index.php?page=game
		
		$con=mysqli_connect("localhost","root","");
		if (mysqli_connect_errno($con)) 
		{ 
			echo "Failed to connect mySQL" . mysqli_connect_error(); 
		} 
		
		$result = $_POST['result'];
		$gamename = $_POST['gamename'];
		$username = $_SESSION['loginuser'];
		
		echo
		"<script>
			alert($result);
		</script>";
		
		$gamename = stripcslashes($gamename);
		$gamename = mysqli_real_escape_string($con, $gamename);
		mysqli_select_db($con, "game_rank");
		
		$query = mysqli_query($con, "select count(*) from $gamename where username = '$username'")
				or die("Failed to connect mySQL ".mysqli_error($con));
		$exist = mysqli_fetch_array($query);
		
		if ($exist['count(*)'] == 1){			// already have rank			
			if ($gamename == "chess") {
				$sql = "UPDATE chess SET username='$username', win=win+$result, played=played+1 WHERE username='$username'";
				if (mysqli_query($con, $sql) === TRUE) {
					echo
					"<script>
						alert('Submitted :D');
						window.location.href='index.php?page=game';
					</script>";
				} else {
					echo "Failed to add rank ".mysqli_error($con);
				}
			}

			else if ($gamename == "matching") {
				$sql = "UPDATE matching SET username='$username', cnt=$result WHERE username='$username' and cnt>$result";
				if (mysqli_query($con, $sql) === TRUE) {
					echo
					"<script>
						alert('Submitted :D');
						window.location.href='index.php?page=game';
					</script>";
				} else {
					echo "Failed to add rank ".mysqli_error($con);
				}
			}
			
			
		}
		else if ($exist['count(*)'] == 0){		// not yet recorded in the leaderboard
			if ($gamename == "chess") {
				$sql = "INSERT INTO chess (username, win, played) VALUES ('$username', $result, 1)";
				if (mysqli_query($con, $sql) === TRUE) {
					echo
					"<script>
						alert('Submitted :D');
						window.location.href='index.php?page=game';
					</script>";
				} else {
					echo "Failed to add rank ".mysqli_error($con);
				}
			}
			else if ($gamename == "matching") {
				$sql = "INSERT INTO matching (username, cnt) VALUES ('$username', $result)";
				if (mysqli_query($con, $sql) === TRUE) {
					echo
					"<script>
						alert('Submitted :D');
						window.location.href='index.php?page=game';
					</script>";
				} else {
					echo "Failed to add rank ".mysqli_error($con);
				}				
			}
			
		}
		
	
	} 		// end of logged in user
		
	else {	
		echo
		"<script>
			alert('Visitors cannot submit rank');
			window.location.href='index.php?page=game';
		</script>";
	}
	
?>

