<?php
require_once "productsobj.php";
// spl_autoload_register(function ($class) {
//     require "classes/" . $class . ".php";
// });



foreach ($groupedProducts as $category => $products) {
    echo "<h2>{$category}</h2>";
    echo "<table border='1'>";
    foreach ($products as $product) {
        echo "<tr><td><a href='views/product.view.php?id={$product->getId()}'>{$product->getName()}</a></td></tr>";
    }
    echo "</table>";
}
