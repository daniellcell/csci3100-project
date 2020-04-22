# csci3100-project

1. Download WampServer (for Windows)
2. Run WampServer64, make sure the server is running (green icon in notification bar)
3. Download the folder "3100" and put it under wamp64\www\
4. Open your browser, type localhost/phpmyadmin/
5. Import login.sql into localhost database (contain one set of user, username:test password:1234)
6. Import the database shoppingcart.sql into localhost database (contain the products information)
6. Modify any php or css files you want and type localhost/3100/xxx.php in your browser to view changes. 
----------------------------------------------------------
Failed to connect MySQL:
Change process_r.php and prcoess.php

$con=mysqli_connect("localhost","root",""); Windows user

  into

$con=mysqli_connect("localhost","root","mysql"); Mac user

----------------------------------------------------------
Chatroom: 
1. Download node.js https://nodejs.org/en/
2. Decompress node_modules.rar in "3100" folder
3. Open terminal and go to 3100 directory
4. npm i --save-dev nodemon
5. npm run devStart 
----------------------------------------------------------
Images:
1. The images for products.php and cart.php is stored in the imgs folder
