<?=template_header('Home')?>
<?php

if (isset($_SESSION['loginuser'])) {
	echo "<h1 align=center>Hello, {$_SESSION['loginuser']}! </h1>";
}
    echo "Welcome to<br>Board Game Platform.";
?>

<?=template_footer()?>
