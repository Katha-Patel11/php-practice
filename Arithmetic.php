<?php
	$a=11;
	$b=2;
    //ARITHMETIC OPERATORS
    echo "<h2><u>ARITHMETIC OPERATORS</u></h2>";
	echo "Addition= ".($a+$b)."<br>";

	echo "Subtraction= ".($a-$b)."<br>";

	echo "Multiplication= ".($a*$b)."<br>";

	echo "Division= ".($a/$b)."<br>";

	echo "Remainder= ".($a%$b)."<br>";

    echo "Exponential= ".($a**$b)."<br>";

    //ASSIGNMENT OPERATORS
    echo "<h2><u>ASSIGNMENT OPERATORS</u></h2>";
	$a+=$b;
	echo "Addition= ".$a."<br>";
	$a-=$b;
	echo "Subtraction= ".$a."<br>";
	$a*=$b;
	echo "Multiplication= ".$a."<br>";
	$a/=$b;
	echo "Division= ".$a."<br>";
	$a%=$b;
	echo "Remainder= ".$a."<br>";
?>