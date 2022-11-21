<?php
    $n=10;
    echo "<table border='1'>";
    for($i=0;$i<10;$i++)
    {
        echo "<tr>";
        for($s=0;$s<$i+1;$s++)
        {
            echo "<td>&nbsp;&nbsp;</td>";
        }
        for($j=$n;$j>0;$j--)
        {
            echo "<td>*</td>";
        }
        echo "</tr>";
        echo "<BR>";
        $n--;
    }
?>