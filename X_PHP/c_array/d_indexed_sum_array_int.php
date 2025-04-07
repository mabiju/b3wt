<?php
$sum = 0;
$nums = [34, 56, 78, 23, 9, 45, 22, 123];
$num_count = count($nums);

for ($i = 0; $i < $num_count; $i++) {
    $sum += $nums[$i];
}

echo "Sum =" . $sum;
?>