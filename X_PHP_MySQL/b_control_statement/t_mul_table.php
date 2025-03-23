<?php  
echo "<table>";
for ($i=1; $i <= 10; $i++) 
{ 
	if($i%3==1)
	{
		echo "<tr>";
	}
	echo "<td>";
	echo "<table border='1'>";
	echo "<tr><td>Num</td><td>x</td><td>Num</td><td>=</td><td>Result</td></tr>";
	for ($j=1; $j <=10 ; $j++) { 
		$num1=$i;
		$num2=$j;
		$result = $num1 * $num2;
		echo "<tr><td>$num1</td><td>x</td><td>$num2</td><td>=</td><td>$result</td></tr>";
	}
	echo "</table>";
	echo "</td>";
}
echo "</tr>";
echo "</table>";
?>