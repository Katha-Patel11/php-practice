<?php
    $f=0;
    $s=1;
    $sum=0;
    echo "$f,&nbsp;$s,";
    for($i=0;$i<10;$i++)
    {
        $sum=$f+$s;
        echo "&nbsp;$sum,";
        $f=$s;
        $s=$sum;
    }
?>