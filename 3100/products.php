<?php
$pdo = pdo_connect_shoppingcart();
// Select all products
$stmt = $pdo->prepare('SELECT * FROM products');
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Get the total number of products
    $total_products = $pdo->query('SELECT * FROM products')->rowCount();
    ?>
<?=template_header('Products')?>

<div class="products content-wrapper">
    <h1>Products</h1>
    <p> Total number of products: <?=$total_products?> Products</p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
                <form action="index.php?page=cart" method="post">
                    <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    <input type="hidden" name="product_id" value="<?=$product['id']?>">
                    <input type="submit" value="Add To Cart">
                </form>
            </span>
        <?php endforeach; ?>
    </div>
</div>

<?=template_footer()?>
