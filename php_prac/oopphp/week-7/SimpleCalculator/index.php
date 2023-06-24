<?php
include "calc.view.php";
include "Calculator.php";


$result = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n1 = $_POST['n1'] ?? '';
    $n2 = $_POST['n2'] ?? '';
    $op = $_POST['op'] ?? '';

    $calculator = new Calculator($n1, $n2);
    $result = $calculator->calculate($op);
}

?>
<div class="mt-4 lg:row-span-3 lg:mt-0">
    <h2 class="sr-only">The result is</h2>
    <p class="text-3xl tracking-tight text-gray-900"><?= $result ?></p>

</div>