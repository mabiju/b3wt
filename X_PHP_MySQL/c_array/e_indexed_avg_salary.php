<?php
$salaries = [12345, 4590, 6789, 45678, 2345, 12009];
$no_of_employees = count($salaries);
$sum = 0;

for ($i=0; $i < $no_of_employees ; $i++) { 
    $sum = $sum + $salaries[$i];
}
$avg = $sum/$no_of_employees;

echo "The average salary is $avg";
?>


