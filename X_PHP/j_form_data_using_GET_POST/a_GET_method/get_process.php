<?php
    if(isset($_GET['submit']))
    {
        if(empty($_GET['username']))
        {
            echo "Please enter something.";
        } else{
            echo "Hello ".$_GET['username'];
        }
    }
?>