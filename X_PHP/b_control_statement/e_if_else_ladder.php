<?php
    $per = 54;

    if($per >=80)
    {
        echo "Distinction";
    }
    else if($per >=60)
    {
        echo "First";
    }
    else if($per >=45)
    {
        echo "Second";
    }
    else if($per >=32)
    {
        echo "Third";
    }
    else
    {
        echo "Better luck next time";
    }
?>