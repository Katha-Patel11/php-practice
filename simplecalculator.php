<?php
	$ch="*";
	$a=10;
	$b=2;
	switch($ch)
	{
		case "+":
			$ans=$a+$b;
			echo "Ans:$ans";
			break;
		case "-":
			$ans=$a-$b;
			echo "Ans:$ans";
			break;
		case "*":
			$ans=$a*$b;
			echo "Ans:$ans";
			break;
		case "/":
			$ans=$a/$b;
			echo "Ans:$ans";
			break;
		case "%":
			$ans=$a%$b;
			echo "Ans:$ans";
			break;
		default:
			echo "Wrong Choice";
	}
?>