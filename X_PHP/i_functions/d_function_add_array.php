<?php
function addNums($num)
{
    $sum = 0;
    foreach ($num as $value) {
        $sum += $value;
    }
    return $sum;
}

$ramMarks = [12, 34, 56, 78, 90];
$sitaMarks = [90, 88, 44, 23, 45];
$sumRam = addNums($ramMarks);
$sumSita = addNums($sitaMarks);

echo "Total marks of Ram = $sumRam <br>";
echo "Total marks of Sita = $sumSita";
