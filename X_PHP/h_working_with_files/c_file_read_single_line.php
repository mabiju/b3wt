<?php
    $file = fopen("myFile.txt", "r"); // opens the file in read mode
    echo fgets($file); // fgets() is used to read single line from the file.
    fclose($file);
?>