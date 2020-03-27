<html>
<head><title>login</title></head>
<body>


<?php
    
    $name = $_POST["name"];
    echo "Hello, ", $name;
    echo nl2br("\n");
    echo "You have successfully logged in to the system."
	    
?>
	
<form action="index.php" method="post">
	
	<input type="submit" id="button" value="Return">
	
</form>
	
</body>
</html>
