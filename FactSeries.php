<?php
    $f=1;
    for($i=1;$i<=10;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            $f=$f*$j;
        }
        echo "$f , ";
        $f=1;
    }
?>