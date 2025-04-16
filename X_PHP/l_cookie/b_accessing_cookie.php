<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessing cookie</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE['user']))
        {
            echo "Cookie 'user' is not set.";
        }else{
            echo "Cookie 'user' is set<br>";
            echo "Cookie value is ".$_COOKIE['user'];
        }
    ?>
</body>
</html>