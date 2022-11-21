<?php
    $k=1;
    echo "Floyd's Triangle<br>";
   for($i=0;$i<5;$i++)
   {
        for($j=0;$j<$i;$j++)
        {
            echo "$k&nbsp;";
            $k++;
        }
        echo "<br>";
   }
?>