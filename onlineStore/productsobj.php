<?php

require_once "classes/Product.php";
require_once "classes/Cart.php";
require_once "classes/Variant.php";
require_once "classes/Category.php";

// spl_autoload_register(function ($class) {
//     require "classes/" . $class . ".php";
// });

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['cart'])) {
    $cart = new Cart();
    $_SESSION['cart'] = $cart;
} else {
    $cart = unserialize($_SESSION['cart']);
}


// Create products
$product1 = new Product(1, "Chips", 7, "../views/Images/chips.jpeg");
$product2 = new Product(2, "Soda", 2, "../views/Images/soda.jpeg");
$product3 = new Product(3, "Cookies", 5, "../views/Images/cookies.jpeg");
$product4 = new Product(4, "samsung mobile", 900, "../views/Images/p2.jpg");
$product5 = new Product(5, "headphone", 500, "../views/Images/h1.jpg");
$product6 = new Product(6, "Sensodyne", 40, "../views/Images/sens.jpg");

// Create a cart
$cart = new Cart();



// Set the cart for each product
$product1->setCart($cart);
$product2->setCart($cart);
$product3->setCart($cart);
$product4->setCart($cart);
$product5->setCart($cart);
$product6->setCart($cart);

// Add products to the cart
$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product3);
$cart->addProduct($product4);
$cart->addProduct($product5);
$cart->addProduct($product6);


//creat variant
$variant1 = new Variant(["size" => "Small", "color" => "Red"]);
$variant2 = new Variant(["size" => "50 ml"]);

//add variant to product
$product4->addVariant($variant1);
$product6->addVariant($variant2);

//creat category
$catFood = new Category("Food");
$catTech = new Category("Electronics");
$catHealth = new Category("Health and Beauty");

//add category to product

$product3->addToCategory($catFood);
$product1->addToCategory($catFood);
$product2->addToCategory($catFood);
$product4->addToCategory($catTech);
$product6->addToCategory($catHealth);
$product5->addToCategory($catTech);

//delete product from cart
$cart->removeProduct($product2);
$products = [$product1, $product2, $product3, $product4, $product5, $product6];
$categories = [$catFood, $catTech, $catHealth];

$cartItems = $cart->getItems();

$groupedProducts = [];

foreach ($products as $product) {
    $category = $product->getCategory();

    if (!isset($groupedProducts[$category])) {
        $groupedProducts[$category] = [];
    }

    $groupedProducts[$category][] = $product;
}

//Get the total quantity and total price in the cart
$totalQuantity = $cart->getTotalQuantity();
$totalPrice = $cart->getTotalPrice();
