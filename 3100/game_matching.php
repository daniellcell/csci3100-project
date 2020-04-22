<html>

<head>
	<title>Card matching</title>
	<script src="jquery-3.5.0.min.js"></script>
	<link href="style_matching.css" rel="stylesheet"/>
</head>

<body>
	<p align="center">You flipped cards <span id="clickcount">0</span> times</p>

	<div id="buttons" style="text-align:center">
		<form method="post">
			<input type="button" value="Return" onClick="this.form.action='index.php?page=game';this.form.submit();">
			<input id="rank" type="button" value="Submit Rank" onClick="this.form.action='index.php?page=game';this.form.submit();">
		</form>
	</div>

	<div id="board">	
	<script type="text/javascript">
		var cards_arr = ["G", "G", "A", "A", "M", "M", "E", "E", "3", "3", "1", "1", "0", "0", "O", "O"];
		var cardsno = cards_arr.length;
		var finish = 0;

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
		
		function startgame() {
			$(".card").not(".matched").click(function () {
				$(".matched").removeClass("open");
					
				if (!$(this).hasClass("matched")) {
					$("#clickcount").text(parseInt($("#clickcount").text()) + 1);
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