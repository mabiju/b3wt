<?php
    if(isset($_POST['submit']))
    {
        if(empty($_POST['username']))
        {
            echo "Please enter something.";
        } else{
            echo "Hello ".$_POST['username'];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with post method in PHP</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Enter username">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>