<?php
    // delete the cookie by setting the exporation date to one hour ago.
    setcookie("user","",time()-3600,"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroying cookie</title>
</head>
<body>
    <?php
        echo "Cookie 'user' destroyed.";
    ?>
</body>
</html>