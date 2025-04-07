<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing to a CSV file</title>
</head>

<body>
    <?php
    $names = array(
        "ram,ram@gmail.com,25,pokhara",
        "sita,cutesita@yahoo.com,22,kathmandu",
        "hari,handsomehari@outlook.com,21,kathmandu"
    );

    $file = fopen("students.csv", "w");

    foreach ($names as $line) {
        fputcsv($file, explode(",", $line));
    }
    echo "Data inserted successfully";
    fclose($file);
    ?>
</body>

</html>