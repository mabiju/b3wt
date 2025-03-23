<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Card Eligibility Check</title>
</head>

<body>
    <h2>Voter Card Eligibility Checker</h2>
    <?php
    $age = 55;
    $citizenship = true;

    if ($age > 17 && $citizenship == true) {
        echo "You're eligible to get voter card.";
    } else {
        echo "You're not eligible to get voter card.";
    }
    ?>
</body>

</html>