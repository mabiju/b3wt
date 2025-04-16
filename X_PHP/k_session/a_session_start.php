<?php
session_start();
$_SESSION['name'] = "Ram";
$_SESSION['faculty'] = "ICTED";
echo "Session variables are created and saved.";