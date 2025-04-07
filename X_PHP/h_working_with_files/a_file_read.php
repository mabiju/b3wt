<?php
    $filename = "myFile.txt";
    $fp = fopen($filename, "r"); // Opens the file in read mode
    $contents = fread($fp, filesize($filename)); // read
    echo "<pre>$contents</pre>"; // printing the data file
    fclose($fp) // close the file
?>