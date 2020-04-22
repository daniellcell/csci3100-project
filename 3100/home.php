<?=template_header('Home')?>
<?php

if (isset($_SESSION['loginuser'])) {
	echo "Hello, ".$_SESSION['loginuser'];
}
    echo "Welcome to our Online Boardgame Platform.";
?>

<?=template_footer()?>
