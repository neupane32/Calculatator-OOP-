<?php

declare(strict_types = 1);
include "./autoload.inc.php";

$operator = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$clac = new Calc($operator, (int)$num1, (int)$num2);

try {
    echo $clac->calculator();
} catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
}
