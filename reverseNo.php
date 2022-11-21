<?php
	$a=123;
	$sum=0;
	$r=0;
	for($i=0;$a>0;$i++)
	{
		$r=$a%10;
		$sum=$sum*10+$r;
		$a=$a/10;
	}
	echo "Reverse Number is $sum";
?>