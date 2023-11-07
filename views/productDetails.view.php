<?php
require_once("./classes/Product.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = $products[$id - 1];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Details</title>
    <!-- Add your CSS styles here -->
</head>

<body>
    <h1>Product Details</h1>
    <?php if (isset($product)) : ?>
        <h2><?php echo $product->getName(); ?></h2>
        <img src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
        <p>Price: $<?php echo $product->getPrice(); ?></p>
        <!-- Add more product details here -->
        <form action="addtocart.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $product->getId(); ?>">
            <input type="submit" value="Add to Cart">
        </form>
    <?php else : ?>
        <p>Product not found.</p>
    <?php endif; ?>
</body>

</html>