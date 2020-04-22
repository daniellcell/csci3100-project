<?=template_header('Home')?>
<?php

if (isset($_SESSION['loginuser'])) {
	echo "<h1 align=center>Hello, {$_SESSION['loginuser']}! </h1>";
}
    echo "<h1 align=center>Welcome to Board Game Platform.</h1>";
?>

<?=template_footer()?>
