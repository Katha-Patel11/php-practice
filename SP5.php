<?php
	$k=0;
    echo "<table border='2'>";
	for($i=1;$i<=5;$i++,$k=0)
	{
        echo "<tr>";
		for($j=1;$j<=5-$i;$j++)
		{
			echo "<td>&nbsp;&nbsp;</td>";
		}
		while($k!=2*$i-1)
		{
			echo "<td>*</td>";
			$k++;
		}
		for($j=1;$j<=5-$i;$j++)
		{
			echo "<td>&nbsp;&nbsp;</td>";
		}
        echo "</tr>";
		echo "<br>";
	}
?>
