<?=template_header('Products')?>
<?=template_footer()?>

<?php
if (!isset($_SESSION['loginuser'])) {
    echo "<script>
    alert('Login to order products!');
    window.location.href='index.php?page=home';
    </script>";
}
else{
    // The amounts of products to show on each page
    $num_products_on_each_page = 4;
    // The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
    $current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
    // Select products ordered by the date added
    $pdo = pdo_connect_shoppingcart();
    // Select all products
    $stmt = $pdo->prepare('SELECT * FROM products LIMIT ?,?');
    $stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
    $stmt->execute();
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Get the total number of products
        $total_products = $pdo->query('SELECT * FROM products')->rowCount();
}
?>
<style type="text/css">
@import "style.css";

h1 {
	display: block;
	font-weight: bold;
	margin: 0;
	padding: 40px 0;
	font-size: 36px;
	text-align: center;
	width: 100%;
}
.products content-wrapper {
	background-color: rgba(202, 214, 240, 0.6);
	width: 50%;
	border-radius: 30px;
	text-align: center;
	color: #384051;
	padding-right: 40px;
	border-radius: 20px;
	position: absolute;
	top: 50%;
	left: 52%;
	transform: translate(-50%,-50%);
}

</style>

<div class="products content-wrapper">
	<form action="index.php?page=cart" method="post">
	<h1> Products </h1>
	<table id = "products">
    <thead>
    <tr>
		<td>Product</td>
        <td>Name</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Total: <?=$total_products?></td>
	</tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
			<tr>
				<form action="index.php?page=cart" method="post">
					<td class="img">
					<img src="imgs/<?=$product['img']?>" width="100" height="100" alt="<?=$product['name']?>"></td>
					<td class="name">
					<span ><?=$product['name']?></span></td>
					<td class="price">
					<span >&dollar;<?=$product['price']?></span></td>
					<td class="quantity">
					<input type="text" name="quantity" size="4"></td>
					<input type="hidden" name="product_id" value="<?=$product['id']?>">
					<td class="price">
					<input type="submit" value="Add To Cart"></td>
				</form>
			</tr>
        <?php endforeach; ?>
        <div>
        <tr>
        <td></td>
        <td><?php if ($current_page > 1): ?>
            <a href="index.php?page=products&p=<?=$current_page-1?>" style= "color:#384051">Prev</a>
        <?php endif; ?></td>
        <td></td>
        <td>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
            <a href="index.php?page=products&p=<?=$current_page+1?>" style= "color:#384051">Next</a>
        <?php endif; ?>
        </td>
        </tr>
	</tbody>
    </table>
    <br/>
    </div>
	</form>
</div>
