<?php
if(isset($_POST['submit'])){
    if(empty($_POST['username']) && empty($_POST['userpass'])){
        // echo "Form chai fill up garau hola hai....";
        header('location:index.php');
    }
    else{
        // echo $_POST['username']. ", your password is ".$_POST['userpass'];
        header('location:welcome.php');
    }



    /* $u_name = $_POST['username'];
    $u_pass = $_POST['userpass'];
    echo $u_name;
    echo $u_pass; */
}