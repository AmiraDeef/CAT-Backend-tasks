<?php
require_once "../productsobj.php";
require_once "../classes/Product.php";
require_once "../classes/Cart.php";

if (!isset($_SESSION)) {
    session_start();
}


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = new Cart();
}

$cart = unserialize($_SESSION['cart']);

if (isset($_POST['delete'])) {
    $id = (int)$_POST['product_id'];

    $cart->removeProduct($products[$id - 1]);
    $_SESSION['cart'] = serialize($cart);

    header('Location: cart.view.php');
    exit();
}

if (isset($_POST['buy'])) {
    header('Location: confirmation.php');
    exit();
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
</head>

<body>
    <h1>Shopping Cart</h1>

    <?php if ($totalQuantity > 0) : ?>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>remove</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($cartItems as $item) : ?>
                    <tr>
                        <td><?php echo $item->getName(); ?></td>
                        <td>$<?php echo $item->getPrice(); ?></td>
                        <td><?php echo $item->getQuantity(); ?></td>
                        <td>$<?php echo $item->getPrice() * $item->getQuantity(); ?></td>
                        <td>
                            <form method="post" action="">
                                <input type="hidden" name="product_id" value="<?= $item->getId() ?>">
                                <input name="delete" value="X" type="submit">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p>Total Quantity in Cart: <?php echo $totalQuantity; ?></p>
        <p>Total Price in Cart: $<?php echo $totalPrice; ?></p>

        <form action="confirmation.php" method="post">
            <input type="submit" name="buy" value="Buy">
        </form>

    <?php else : ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>

</body>

</html>