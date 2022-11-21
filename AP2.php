<?php
    $no=123;
    $sum=0;
    while($no>0)
    {
        $r=$no%10;
        $sum=($sum*10)+$r;
        $no=(int)($no/10);
    }
    echo "Reverse No:$sum";
?>