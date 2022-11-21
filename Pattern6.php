<?php
    $k=1;
    for($i=1;$i<10;$i++)                     
	{                                                  
		for($j=1;$j<=$k;$j++)                          
		{                                          
			echo "*";                      
		}
		if($i<5)
		{
			$k++;
		}
		else
		{
			$k--;
		}
		echo "<br>";
	}
?>