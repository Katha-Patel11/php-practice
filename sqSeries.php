<?php
	$a=1;
	for($i=1;$i<10;$i++)
	{
		for($j=1;$j<=$i;$j++)
		{
			$a*=$i;
		}
		echo "$a, ";
		$a=1;
	}
?>