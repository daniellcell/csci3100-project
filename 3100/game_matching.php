<?php
	if (!isset($_SESSION)) {
		session_start();
	}	
?>

<html>

<head>
	<title>Card matching</title>
	<script src="jquery-3.5.0.min.js"></script>
	<link href="style_matching.css" rel="stylesheet"/>
</head>

<body>
	<p align="center">You flipped cards <span id="clickcount">0</span> times</p>

	<div id="buttons" style="text-align:center">
		<button onclick="window.location='play.php'">Return</button>
		
		<form action="submit_rank.php" method="post">
			<input id="result" name="result" type="number" style="display:none">
			<input id="gamename" name="gamename" type="text" value="matching" style="display:none">
			<input id="rank" type="button" value="Submit result" onClick="this.form.submit();">
		</form>
	</div>

	<div id="board">	
	<script type="text/javascript">
		var cards_arr = ["G", "G", "A", "A", "M", "M", "E", "E", "3", "3", "1", "1", "0", "0", "O", "O"];
		var cardsno = cards_arr.length;
		var finish = 0;
		var cnt = 0;

		function shuffle() {
			var i = cardsno;
			var id = 1;
			
			while (i > 0) {
				var index = Math.floor(Math.random()*cards_arr.length);
				var card = cards_arr[index];
				$("#board").append("<span id="+ id +" class='close card'>"+ card +"</span>")
				cards_arr.splice(index, 1);
				i--;
				id++;
			}
		}
		
		function closeboard() {
			$('#board').hide();
		}	
				
		function startgame() {
			$(".card").not(".matched").click(function () {
				$(".matched").removeClass("open");
					
				if (!$(this).hasClass("matched")) {
					$("#clickcount").text(parseInt($("#clickcount").text()) + 1);
					cnt++;
				}	
					
				var cardsopened = $(".open").length;

				if (cardsopened == 0) {		// initially, 0 cards are opened
					$(this).removeClass("close").addClass("open");
				}
				else if (cardsopened == 1) {		// 1 card already opened, now open the second card
					var first = $(".open").text();
					var second = $(this).text();
					var firstid = $(".open").attr("id");
					var secondid = $(this).attr("id");
					
					if (first == second && firstid != secondid) {
						// keep the matched cards, disable them
						$(".open").removeClass("close").removeClass("open").addClass("matched");
						$(this).removeClass("close").removeClass("open").addClass("matched");
					} else {
						$(this).removeClass("close").addClass("open");
					}
				}
				else if (cardsopened == 2) {		// close 2 opened cards, then open a new one
					$(".open").removeClass("open").addClass("close");
					$(this).removeClass("close").addClass("open");
				}
				
				// if all cards are opened
				if ($(".matched").length == cardsno) {
					finish = 1;
				}
				
				if (finish == 1) {
					document.getElementById("rank").disabled = false;
					document.getElementById("result").setAttribute("value", cnt);
					closeboard();
					alert("Game end!");
				}
				
				
			});
		}

		document.getElementById("rank").disabled = true;
		shuffle();
		startgame();

		
		
	</script>
	</div>


</body>

</html>

<!--reference to https://www.youtube.com/watch?v=QQDOZtG56xA-->