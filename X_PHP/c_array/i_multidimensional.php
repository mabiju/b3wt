<?php
$students = array(
    array("Ram", 3, 12),
    array("Sita", 5, 14),
    array("Hari", 4, 15),
    array("Gita", 8, 16),
);

/* echo $students[0][0] . " studies in class " . $students[0][1] . " and " . $students[0][2] . " years old. <br>";
echo $students[1][0] . " studies in class " . $students[1][1] . " and " . $students[1][2] . " years old. <br>";
echo $students[2][0] . " studies in class " . $students[2][1] . " and " . $students[2][2] . " years old. <br>"; */


for ($row = 0; $row < 4; $row++) {
    echo "<p> Row: ". $row ."<p/>";
    echo "<ul style='list-style:none'>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$students[$row][$col]."<li/>";
    }
    echo "<ul/>";
}

?>