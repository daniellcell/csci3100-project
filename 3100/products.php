<?=template_header('Products')?>
<?=template_footer()?>

<?php
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
?>

<div class="products content-wrapper">
    <h1>Products</h1>
    <p> Total number of products: <?=$total_products?> Products</p>
    <div>
        <?php foreach ($products as $product): ?>
            <form action="index.php?page=cart" method="post">
                <img src="imgs/<?=$product['img']?>" width="100" height="100" alt="<?=$product['name']?>">
                <span ><?=$product['name']?></span>
                <span >&dollar;<?=$product['price']?></span>
                <input type="text" name="quantity" size="4">
                <input type="hidden" name="product_id" value="<?=$product['id']?>">
                <input type="submit" value="Add To Cart">
            </form>
        <?php endforeach; ?>
        <div>
        <?php if ($current_page > 1): ?>
            <a href="index.php?page=products&p=<?=$current_page-1?>" style= "color:White">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
            <a href="index.php?page=products&p=<?=$current_page+1?>" style= "color:White">Next</a>
        <?php endif; ?>
        </div>
        <br />
    </div>
</div>
