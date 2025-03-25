<?php
// associative array : key => value
$marks = array(
    "Ram" => 45,
    "Sita" => 34,
    "Hari" => 67
);

/* echo "Marks of Ram = " . $marks["Ram"] . "<br>";
echo "Marks of Sita = " . $marks["Sita"] . "<br>";
echo "Marks of Hari = " . $marks["Hari"] . "<br>"; */

echo "The use of foreach loop to display students marks<br>";

foreach ($marks as $key => $value) {
    echo "Marks of " . $key . " is = " . $value . "<br>";
}
?>