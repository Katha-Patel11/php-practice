<?php
    for($i=1;$i<=5;$i++)                        
	{                                        
		for($j=$i;$j<5;$j++)
		{
			echo "&nbsp;&nbsp;";
		}
		for($j=1;$j<=(2*$i-1);$j++)
		{
			echo "$j";
		}
		echo "<BR>";
	}
?>