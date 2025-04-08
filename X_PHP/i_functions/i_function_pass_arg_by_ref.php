<?php
//Passing Argument by Reference
function addFive($num)
{
$num += 5;
}
function addSix(&$num)
{
$num += 6;
}
$orignum = 10;

/* $result = addFive($orignum);
echo "The original value is = $result <br>";

$result = addsix($orignum);
echo "The original value is = $result"; */

addFive( $orignum );
echo "Original Value is $orignum<br />";
addSix( $orignum );
echo "Original Value is $orignum<br />";
?>