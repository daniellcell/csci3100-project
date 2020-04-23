# csci3100-project

1. Download WampServer (for Windows)
2. Run WampServer64, make sure the server is running (green icon in notification bar)
3. Download the folder "3100" and put it under wamp64\www\
4. Open your browser, type localhost/phpmyadmin/
5. Import **login.sql** into localhost database (contain one set of user, username:test password:1234)
6. Import **shoppingcart.sql** into localhost database (contain the products information)
7. Import **game_rank.sql** into localhost database (contain 2 tables, they are ranks for 2 games respectively)
8. Modify any php or css files you want and type localhost/3100/xxx.php in your browser to view changes. 
9. Google Chrome is preferred
----------------------------------------------------------
Failed to connect MySQL,
change process_r.php and prcoess.php the following:

$con=mysqli_connect("localhost","root",""); Windows user

  into

$con=mysqli_connect("localhost","root","mysql"); Mac user

----------------------------------------------------------
Chatroom: 
1. Download node.js https://nodejs.org/en/
2. Open terminal and go to 3100 directory
3. npm i --save-dev nodemon
4. npm run devStart    之後每次 run 打呢句
----------------------------------------------------------
Images:
1. The images for products.php and cart.php is stored in the imgs folder
