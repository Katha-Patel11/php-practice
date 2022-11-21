<?php
    $no=153;
    $a=$no;
    $r=0;
    $sum=0;
    while($no!=0)
    {
        $r=$no%10;
        $sum=$sum+($r*$r*$r);
        $no=(int)($no/10);
    }
    if($sum==$a)
    {
        echo "$a is Armstrong Number";
    }
    else
    {
        echo "$a is not an Armstrong Number";
    }
?>