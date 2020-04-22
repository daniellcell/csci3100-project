<!--HAVE BUG!!! but idk where :(
	plz don't try yet, will GG seriously
	if tried and sometimes sno response, plz restart the wampserver and use another browser..-->

<html>

<head>
	<title>Connect Four</title>
	<script src="jquery-3.5.0.min.js"></script>
	<link href="style_chess.css" rel="stylesheet"/>
</head>

<body>
	<h3 style="text-align:center">
		How to win: get 4-in-a-row / 4-in-a-column.
	</h3>
	<div id="buttons" style="text-align:center">
		<form method="post">
			<input type="button" value="Return" onClick="this.form.action='index.php?page=game';this.form.submit();">
			<input id="rank" type="button" value="Submit Rank" onClick="this.form.action='index.php?page=game';this.form.submit();">
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
		}	
		
		function checkend(cur, col, name) {
			//alert(col);
			var i = cur;
			var cnt = 0;
			
			// check column
			while (i < size && cnt <= 4) {
				if ($("span[id=" + i + "]").hasClass(name)) {
					cnt++;
					i = i+7;
				}
				else break;
			}
			if (cnt == 4) return 1;
			
			
			i = cur;
			cnt = 0;
			// check row
			// TO DO.. /_\

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
				
				// computer's turn (random)
				while (check == 0) {
					var pick = Math.floor(Math.random()*7) - 1;
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
				
				var finish = checkend(cur, col, "player");		// player
				if (finish == 1) {
					document.getElementById("rank").disabled = false;
					closeboard();
					alert("Game end! Winner: Player");
				}	
					
				var finish = checkend(com, pick, "computer");		// computer
				if (finish == 1) {
					document.getElementById("rank").disabled = false;
					closeboard();
					alert("Game end! Winner: Computer");
				}	
				
				if (finish == 0 && cnt == size) {	// if all holes are occupied
					finish = 1;
					document.getElementById("rank").disabled = false;
					closeboard();
					alert("Game end! Draw");
				}
			
			});
		}

		document.getElementById("rank").disabled = true;
		initialize();
		startgame();

	</script>
	</div>


</body>

</html>
