<?=template_header('Home')?>
<div class = "home">
<?php
if (isset($_SESSION['loginuser'])) {
	echo "Hello, ".$_SESSION['loginuser']."! ";
}
    echo "Welcome to<br>Board Game Platform";
?>
</div>
<?=template_footer()?>
