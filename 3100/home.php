<?=template_header('Home')?>
<?php

if (isset($_SESSION['loginuser'])) {
	echo "Hello, ".$_SESSION['loginuser']."! ";
}
    echo "Welcome to Board Game Platform.";
?>

<?=template_footer()?>
