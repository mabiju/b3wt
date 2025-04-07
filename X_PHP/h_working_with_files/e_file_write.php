<?php
    $file = fopen("apple.txt","w"); // opens the file in write only mode
    fwrite($file,"Hello ");
    fwrite($file,"Sanothimi ");
    fwrite($file,"Bhaktapur");
    fclose($file);
    echo "Data inserted successfully.";
?>