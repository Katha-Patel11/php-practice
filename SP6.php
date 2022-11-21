<?php
	$k=0;
    echo "<table border='1'>";
	for ($i=1;$i<=5;$i++) 
    {
        echo "<tr>";
        for ($j=5;$j>$i;$j--) 
        {
            echo "<td>&nbsp;&nbsp;</td>";
        }
        for ($k=0;$k<$i*2-1;$k++) 
        {
            echo "<td>*</td>";
        }
        for ($j=5;$j>$i;$j--) 
        {
            echo "<td>&nbsp;&nbsp;</td>";
        }
        echo "<br>";
    }
    for($i=1;$i<=5;$i++)
    {
        echo "<tr>";
        for($k=0;$k<$i;$k++) 
        {
            echo "<td>&nbsp;&nbsp;</td>";
        }
        for($j=0;$j<2*(5-$i)-1;$j++) 
        {
            echo "<td>*</td>";
        }
        for($k=0;$k<$i;$k++) 
        {
            echo "<td>&nbsp;&nbsp;</td>";
        }
        echo "</tr>";
        echo "<br>";
    }
    /*for($i=4;$i>0;$i--,$k=0)
	{
        echo "<tr>";
		for($j=$i;$j>=4-$i;$j--)
		{
			echo "<td>#<td>";
		}
		while($k!=2*$i-1)
		{
			echo "<td>*</td>";
			$k++;
		}
        echo "</tr>";
		echo "<br>";
	}*/
?>
