<?php
$con = mysqli_connect("localhost","root","","db_sls");
if(!$con){
    die("Cannot connect the database". mysqli_errno($con));
}
/* else{
    echo "Database connected successfully.";
} */
