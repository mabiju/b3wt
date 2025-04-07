<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with date and time in PHP</title>
</head>

<body>
    <?php
    echo "Today is " . date("y/m/d") . "<br/>"; // Today is 25/03/30
    echo "Today is " . date("y-m-d") . "<br/>"; // Today is 25-03-30
    echo "Today is " . date("y.m.d") . "<br/><br/>";    // Today is 25.03.30
    echo "Today is " . date("Y/m/d") . "<br/>"; // Today is 2025/03/30
    echo "Today is " . date("Y/M/d") . "<br/>"; // Today is 2025/Mar/30
    echo "Today is " . date("Y/M/D") . "<br/><br/>";    // Today is 2025/Mar/Sun
    echo "Today is " . date("l") . "<br/><br/>"; // Today is Sunday
    ?>
</body>

</html>









