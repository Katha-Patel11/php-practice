<?php
    $no=123456789;
    $sum=0;
    while($no>0)
    {
        $r=$no%10;
        $sum=$sum+$r;
        $no=(int)($no/10);
    }
    echo "Sum of digits is : $sum";
?>