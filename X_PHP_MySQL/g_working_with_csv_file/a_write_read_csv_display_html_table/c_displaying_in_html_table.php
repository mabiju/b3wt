<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying CSV content in HTML Table</title>
</head>

<body>
    <table border="1">
        <?php
        $file = fopen("students.csv", "r"); // open a csv file
        while (($row = fgetcsv($file)) !== FALSE) { // reads the csv file row by row
            echo "<tr>";
            foreach ($row as $col) {
                echo "<td>" . $col . "</td>";
            }
            echo "</tr>";
        }
        fclose($file);
        ?>
    </table>
</body>

</html>