<?php
    if(isset($_POST['submit']))
    {
        if(empty($_POST['username']))
        {
            echo "Please enter something.";
        } else{
            echo "Hello ".$_POST['username'];
        }
    }
?>