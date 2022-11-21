<?php
    $r=5;
    for($i=1;$i<=$r;$i++)                        //inverted triangle
	{
		for($j=1;$j<$i;$j++)
		{
			echo "&nbsp;";
		}
		for($j=1;$j<=($r*2-(2*$i-1));$j++)
		{
			echo "$j";
		}
		echo "<BR>";
	}
?>