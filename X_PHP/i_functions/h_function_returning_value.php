<?php
function addNums($num1, $num2)
{
    $num = $num1 + $num2;
    return $num;
}

$return_value = addNums(10, 20);
echo "The function return value is = $return_value ";
