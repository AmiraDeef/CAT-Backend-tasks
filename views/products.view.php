<?php
require_once("./classes/Product.php");
require_once("./classes/Category.php");
$products = [];
$categories = [];
$p1 = new Product(1, "Chips", 7, "views/Images/p1.jpg");
$p2 = new Product(2, "samsung mobile", 10.5, "views/Images/p1.jpg");

$cfood = new Category("food");
$cHealth = new Category("Health and beauty");
$cElec = new Category("Electronics");
$p1->addCategory($cfood);
$p2->addCategory($cElec);

array_push($products, $p1);
array_push($products, $p2);

array_push($categories, $cfood);
array_push($categories, $cHealth);
array_push($categories, $cElec);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Shopping time</title>
    <style>
        body {
            background-attachment: fixed;
            background-repeat: repeat;
        }

        ul a,
        th a {
            text-decoration: none;
            color: black;
        }

        table {
            width: 100%;
            background-color: lightgray;
            padding: 0;
            margin: 0;
            border-spacing: 0;
        }

        table img {
            width: 200px;
            height: 230px;
            object-fit: contain;
        }

        th {
            background-color: lightgray;
            text-align: center;
        }

        a:hover {
            cursor: pointer;
            color: darkmagenta;
        }

        th a:hover {
            background-color: darkmagenta;
        }

        ul {
            display: flex;
            background-color: lightgray;
            justify-content: space-between;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        li {
            background-color: lightgray;
            padding: 5px 10px;
            font: bold 20px Tahoma, Sans-serif;
        }

        li:not(:first-child) {
            margin-left: auto;
        }

        div {
            border: 33px darkmagenta;
            background-color: darkmagenta;
            text-align: center;
            height: 60px;

            padding-top: 25px;
            font-size: 20;
            font-family: "Segoe UI", Tahoma;
        }
    </style>
</head>

<body>
    <ul>
        <li><img src="views/Images/home.png" alt="Home" /></li>
        <li>
            <a href="products.html">Products</a>
        </li>
        <li>
            <a href="about.html">About us</a>
        </li>
        <li>
            <a href="contact.html">Contact us</a>
        </li>
    </ul>
    <table>
        <thead>
            <tr>
                <?php
                foreach ($categories as $category) {
                    echo "<th>{$category->getName()}</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($categories as $category) {
                echo "<tr>";
                foreach ($products as $product) {
                    if ($product->getCategory() === $category) {
                        echo "<tr><td>
                        <a href='/productsDetails?id={$product->getId()}'>
                        <img src='{$product->getimage()}' alt='{$product->getName()}'>
                        <br>
                        <p>{$product->getName()}</p>
                        </a></td></tr>";
                    } else {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>

</body>

</html>