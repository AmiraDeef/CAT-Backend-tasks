<?php
require_once "../productsobj.php";
require_once("../classes/Cart.php");


?>

<html>
<h1>Confirmation</h1>

<p>Thank you for your order! Your total price is $<?php echo $totalPrice; ?>.</p>

<p>Your order details are as follows:</p>

<ul>
    <?php foreach ($cartItems as $item) : ?>
        <li><?php echo $item->getName(); ?> (<?php echo $item->getQuantity(); ?>)</li>
    <?php endforeach; ?>
</ul>

</html>