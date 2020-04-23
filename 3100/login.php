<?=template_header('Login')?>
<form class="box" action="process.php" method="post">
	<h1>Login</h1>
	<input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="" value="Login">
	Don't have an account? 
	<form method="post">
		<input type="button" value="Register" onClick="this.form.action='index.php?page=register';this.form.submit();">
	</form>
</form>
<?=template_footer()?>
