<?php
    $k=1;
    echo "<table border='1'>";
    for($i=1;$i<=10;$i++)
    {
        echo "<TR>";
        for($j=1;$j<=$i;$j++)
        {
            if($k%2==0)
            {
                echo "<td bgcolor='yellow'>*</td>";
            }
            else
            {
                echo "<td bgcolor='red'>*</td>";
            }
            $k++;
        }
        echo "</TR>";
        echo "<BR>";
    }
?>