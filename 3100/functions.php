<?php
function pdo_connect_shoppingcart() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        die ('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>$title</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <header>
            <div class="content-wrapper">
				<nav>
                <img draggable="false" src="imgs/icon.png" height="64" width="64">
                <h1>Board Game Platform</h1>
				</nav>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="index.php?page=game">Game</a>
                    <a href="index.php?page=chat" target="_blank">Chat</a>
                    <a href="index.php?page=products">Products</a>
                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <nav>
EOT;
	if (isset($_SESSION['loginuser'])) {
		echo "Hi, ".$_SESSION['loginuser'];
		echo '<a href="index.php?page=logout">Logout</a>';
	} else {
		echo '<a href="index.php?page=login_check">Login</a>';
	}

echo <<<EOT
                </nav>
            </div>
        </header>
        <main>
EOT;
}
// Template footer
function template_footer() {
$year = 2020;
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, Board Game Platform</p>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>
EOT;
}
?>
