<?php
	include 'functions.php';
	if (!isset($_SESSION)) {
		session_start();
	}	
?>
<?=template_header('Connect Four')?>
<?=template_footer()?>

<html>

<head>
	<title>Connect Four</title>
	<script src="jquery-3.5.0.min.js"></script>
	<link href="style_chess.css" rel="stylesheet"/>
</head>

<body>
	<h3 id = "det" style="text-align:center">
		This is a simplified version of 'Connect Four'.<br>
		How to win: get 4-in-a-row / 4-in-a-column.<br>
		You can start your turn first.
	</h3>
	<div id="buttons" style="text-align:center" class = "box">
		<h1>Game End!<h1/><text id = "end"></text>
		<form action="submit_rank.php" method="post">
			<input id="result" name="result" type="number" style="display:none">
			<input id="gamename" name="gamename" type="text" value="chess" style="display:none">
			<input id="rank" type="button" value="Submit result" onClick="this.form.submit();">
		</form>
	</div>

	<div id="board">	
	<script type="text/javascript">
		var board_arr = [".", ".", ".", ".", ".", ".", ".", 
									".", ".", ".", ".", ".", ".", ".", 
									".", ".", ".", ".", ".", ".", ".", 
									".", ".", ".", ".", ".", ".", ".", 
									".", ".", ".", ".", ".", ".", ".", 
									".", ".", ".", ".", ".", ".", "."];		// 7x6 board
		var size = board_arr.length;
		var finish = 0;
		var base = [35, 36, 37, 38, 39, 40, 41];
		var cnt = 0;

		function initialize() {
			var id = 0;
			while (id < size) {
				var hole = board_arr[id];
				$("#board").append("<span id="+ id +" class='empty hole'>"+ hole +"</span>");
				id++;
			}
		}
		
		function closeboard() {
			$('#board').hide();
			$('#det').hide();
			$('#buttons').show();
		}	
		
		function checkend(cur, col, name) {
			// check column
			var i = cur;
			var cnt = 0;			
			while (i < size && cnt <= 4) {
				if ($("span[id=" + i + "]").hasClass(name)) {
					cnt++;
					i = i+7;
				}
				else break;
			}
			if (cnt == 4) return 1;
			
			// check row
			var row = Math.floor(cur/7);
			var left = 7*row;
			var right = left+6;
			cntL = 0;
			cntR = 0;
			
			i = cur;
			while (i>=left) {
				if ($("span[id=" + i + "]").hasClass(name)) {
					cntL++;
					i--;
				}			
				else break;
			}
			i = cur+1;
			while (i<=right) {
				if ($("span[id=" + i + "]").hasClass(name)) {
					cntR++;
					i++;
				}			
				else break;
			}
			if ((cntL+cntR) >= 4) return 1;

			return 0;
		}
		
		function startgame() {
			$(".hole").click(function () {
				var col = $(this).attr("id") % 7;
				var cur, com;		// player or computer's exact move
				var i = base[col];
				
				
				// player's turn
				var check = 1;
				while (i>=0 && check == 1) {
					if ($("span[id=" + i + "]").text() == ".") {
						$("span[id=" + i + "]").removeClass("empty").addClass("occupied").addClass("player");
						check = 0;
						cur = base[col];
						base[col] = i-7;
						cnt += 1;
					}
					i = i-7;					
				}	
				
				var finish = checkend(cur, col, "player");		// player
				if (finish == 1) {
					document.getElementById("rank").disabled = false;
					$('#end').append("<h2>You win!</h2>");
					closeboard();
					document.getElementById("result").setAttribute("value", 1);
					
				}	
				
				// computer's turn (random)
				while (check == 0) {
					var pick = Math.floor(Math.random()*7);
					i = base[pick];
					while (i>=0 && check == 0) {
						if ($("span[id=" + i + "]").text() == ".") {
							$("span[id=" + i + "]").removeClass("empty").addClass("occupied").addClass("computer");
							check = 1;
							com = base[pick];
							base[pick] = i-7;
							cnt += 1;
						}
						i = i-7;
					}
				}
					
				var finish = checkend(com, pick, "computer");		// computer
				if (finish == 1) {
					document.getElementById("rank").disabled = false;
					$('#end').append("<h2>Computer win!</h2>");
					closeboard();
					document.getElementById("result").setAttribute("value", 0);
				}	
				
				if (finish == 0 && cnt == size) {	// if all holes are occupied
					finish = 1;
					document.getElementById("rank").disabled = false;
					$('#end').append("<h2>Draw!</h2>");
					closeboard();
					document.getElementById("result").setAttribute("value", 0);
				}
			
			}
			);
		}
		
		$('#buttons').hide();
		document.getElementById("rank").disabled = true;
		initialize();
		startgame();

	</script>
	</div>
	<input id="return" value="Return" onClick="window.location='play.php'">

</body>

</html>
