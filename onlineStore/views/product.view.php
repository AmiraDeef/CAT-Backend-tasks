<?php
session_start();

require_once "../classes/Cart.php";
require_once("../productsobj.php");


if (!class_exists('Cart')) {

    require_once "../classes/Cart.php";
}


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = new Cart();
}


$cart = unserialize($_SESSION['cart']);


if ($_GET['id']) {
    $id = $_GET['id'];
    $product = $products[$id - 1];
    if (isset($_POST['add'])) {

        $cart->addProduct($product);
        header('Location: cart.view.php');
        exit();
    }
}


echo "<pre>";
var_dump($_GET);
var_dump($_POST);
var_dump($product);
echo "</pre>";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Details</title>
</head>

<body>
    <h1>Product Details</h1>
    <?php if (isset($product)) : ?>
        <h2><?php echo $product->getName(); ?></h2>
        <img src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
        <p>Price: $<?php echo $product->getPrice(); ?></p>

        <form action="product.view.php?id=<?php echo $product->getId(); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="product_id" value="<?php echo $product->getId(); ?>">
            <input type="submit" name="add" value="Add to cart">
        </form>
    <?php else : ?>
        <p>Product not found.</p>
    <?php endif; ?>
</body>

</html>