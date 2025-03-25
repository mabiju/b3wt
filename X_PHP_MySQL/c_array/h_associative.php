<?php
    $address = array(
        "Ram"=> "Anakantar",
        "Sita"=> "Ghopteodar",
        "Biju"=> "Timro dil ma"
    );
    $address["Hanuman"] = "Hawa";

     foreach($address as $key => $value) {
        echo $key . " lives in ". $value ."<br>";
     }  
?>