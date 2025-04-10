<?php
require_once("connection.php");
if(isset($_POST['submit'])){
    if(empty($_POST['user']) && empty($_POST['pass'])){
        // echo "Form chai fill up garau hola hai....";
        header('location:index.php');
    }
    else{
        $u = $_POST['user'];
        $p = $_POST['pass'];
        $query = "SELECT * FROM `tbl_users` WHERE `uname` = '$u' AND `upass` = '$p' ";
        $result = mysqli_query($con, $query);
        if(mysqli_fetch_assoc($result)){
            header('location:welcome.php');
        }
        else{
            header('location:index.php?Invalid=Invalid Credentials');
        }
        
    }
}