<?php
$con = mysqli_connect("localhost", "root", "", "db_sls");
if (!$con) {
    die("Cannot connect database " . mysqli_errno($con));
}
else{
    echo "Database connected successfully.";
}
