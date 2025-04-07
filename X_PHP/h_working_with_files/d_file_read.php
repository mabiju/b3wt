<?php
$file = fopen("myFile.txt", "r");
echo fgetc($file);
while (!feof($file)) {
    echo fgetc($file);
}
fclose($file);
?>