<?php
	$k=0;
	for($i=1;$i<=5;$i++,$k=0)
	{
		for($j=1;$j<=5-$i;$j++)
		{
			echo "&nbsp;&nbsp;";
		}
		while($k!=2*$i-1)
		{
			echo "*";
			$k++;
		}
		echo "<br>";
	}
?>
