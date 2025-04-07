<?php
$a = 20;
$b = 10;

$symbol = '/';

switch ($symbol) {
    case '+':
        echo "The sum = " . $a + $b;
        break;
    case '-':
        echo "Difference = " . $a - $b;
        break;
    case '*':
        echo "The product = " . $a + $b;
        break;
    case '/':
        echo "Quotient = " . $a / $b;
        break;

    default:
        echo "Invalid input";
        break;
}
?>