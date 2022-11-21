<?php
    $k=1;
    for($i=0;$i<=10;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            if($k%2==0)
            {
                echo "0&nbsp;&nbsp;";
            }
            else
            {
                echo "1&nbsp;&nbsp;";
            }
            $k++;
        }
        echo "<BR>";
    }
?>