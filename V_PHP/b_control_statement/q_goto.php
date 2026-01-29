<?php
$age = 19;
if ($age > 17) {
    goto voter;
} else {
    echo "Non voter";
}
voter:
echo "Voter";
?>