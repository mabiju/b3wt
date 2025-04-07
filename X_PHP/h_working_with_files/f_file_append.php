<?php
    $file = fopen("apple.txt","a"); // opens the file in append mode
    fwrite($file,"How ");
    fwrite($file,"are ");
    fwrite($file,"you?");
    fclose($file);
    echo "Data added successfully.";
?>