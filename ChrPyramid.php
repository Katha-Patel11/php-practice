<?php
    $ch=65;
    for($i=0;$i<=5;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            echo chr($ch)."&nbsp;&nbsp;";
            $ch++;
        }
        echo "<BR>";
    }
?> 