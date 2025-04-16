<?php
// session_start();
// echo "Hello " . $_SESSION['name'];
// echo " and you are studying " . $_SESSION['faculty'];

session_start();
if (isset($_SESSION['name'])) {
    echo "Hello " . $_SESSION['name'];
    echo " and you are studying " . $_SESSION['faculty'];
} else {
    echo "Please set session variables.";
}
