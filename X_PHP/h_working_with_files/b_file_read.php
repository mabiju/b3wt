<?php
    // $file = fopen("myFile.txt", "r"); // prints the default text lines
    $file = fopen("myFilee.txt", "r") or die("Unable to open the file.");
    echo fread($file, filesize("myFile.txt"));
    fclose($file);
?>