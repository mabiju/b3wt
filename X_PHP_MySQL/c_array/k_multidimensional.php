<?php
$student = array(
    array(
        "name" => "Ram",
        "age" => 25,
        "address" => "Kathmandu",
        "email" => "cuteram@gmail.com"
    ),
    array(
        "name" => "Sita",
        "age" => 22,
        "address" => "Pokhara",
        "email" => "handsomehunk@yahoo.com"
    ),
    array(
        "name" => "Hari",
        "age" => 23,
        "address" => "Chitwan",
        "email" => "timrohari@hotmail.com"
    ),
);

// echo $student[2]["address"];    //Chitwan

$keys = array_keys($student);
// echo $keys;

for ($i = 0; $i < count($student); $i++) {
    echo "<br/>";
    foreach ($student[$keys[$i]] as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }
}
?>