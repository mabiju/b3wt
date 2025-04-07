<?php
$username = "ram";
$password = "pass@1234";
echo strlen($password);

if(($username == "ram") && ($password == "pass@1234") && strlen($password) > 8){
    echo "Hello " . $username;
}else{
    echo "Timi ta arkai manxe po parexau.";
}