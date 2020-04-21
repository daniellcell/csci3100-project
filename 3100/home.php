<?=template_header('Home')?>
<?php

session_start();

if (isset($_SESSION['loginuser'])) {
	echo "Hello, ".$_SESSION['loginuser'];
}
    echo "Wellcome to our Online Boardgame Platform.";
?>

<?=template_footer()?>
