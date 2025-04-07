<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with PHP date and time</title>
</head>

<body>
    <?php
    //Working with TIME
    //h -12 hours time format with leading 0 (01-12)
    //i -minutes leading with 0 (00-59)
    //s -seconds leading with 0 (00-59)
    //a -AM or PM
    
    echo "Time is ".date("h:i:s")."<br/>";
    echo "Time is ".date("h:i:sa")."<br/>";

    // setting default timezome for Kathmandu
    date_default_timezone_set("Asia/Kathmandu");
    echo "Nepali standard time is ".date("h:i:sa")."<br/>";
    ?>
</body>

</html>