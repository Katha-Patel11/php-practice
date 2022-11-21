<?php
	$a=121;
    $b=$a;
	$sum=0;
	$r=0;
	while($a>0)
	{
		$r=$a%10;
		$sum=$sum*10+$r;
		$a=(int)($a/10);
	}
    if($sum==$b)
    {
        echo "$b is pallindrome.<br>";
    }
	else
    {
        echo "$b is not pallindrome.<br>";
    }
?>