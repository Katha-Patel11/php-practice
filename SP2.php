<?php
    echo "<table border='1'>";
    for($i=5;$i>0;$i--)
    {
        echo "<tr>";
        for($j=$i;$j>0;$j--)
        {
            echo "<td>*</td>";
        }
        echo "</tr>";
        echo "<BR>";
    }
?>