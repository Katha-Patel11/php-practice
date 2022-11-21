<?php
    $m=1;
    echo "<table border='1'>";
    for($i=10;$i>0;$i--)
    {
        echo "<TR>";
        for($s=1;$s<=$i-1;$s++)
        {
            echo "<td>&nbsp;</td>";
        }
        for($j=0;$j<$m;$j++)
        {
            echo "<td>*</td>";
        }
        echo "</tr>";
        echo "<BR>";
        $m++;
    }
?>