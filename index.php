<?php
require_once("./classes/Product.php");
require_once("./classes/Cart.php");

// Create products
$product1 = new Product(1, "Chips", 7, "chips.jpg");
$product2 = new Product(2, "Soda", 2, "soda.jpg");
$product3 = new Product(3, "Cookies", 5, "cookies.jpg");

// Create a cart
$cart = new Cart();

// Set the cart for each product
$product1->setCart($cart);
$product2->setCart($cart);
$product3->setCart($cart);

// Add products to the cart
$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product1); // Adding the same product again to increase quantity
$cart->addProduct($product3);

// Remove a product from the cart
$cart->removeProduct($product2);

// Increase the quantity of a product
$product1->increaseQuantity(); // Increase by 1

// Decrease the quantity of a product
$product1->decreaseQuantity(1); // Decrease by 1

// Get the total quantity and total price in the cart
$totalQuantity = $cart->getTotalQuantity();
$totalPrice = $cart->getTotalPrice();


// Output the results
echo "Total Quantity in Cart: " . $totalQuantity . "<br>";
echo "Total Price in Cart: $" . $totalPrice . "<br>";

$cart->getCartItems();
