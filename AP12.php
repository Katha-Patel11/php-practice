<?php
    $arr=array(10,20,'hi',10,10);
    $key=10;
    $n=count($arr);
    $f=0;
    for($i=0;$i<$n;$i++)
    {
        if($arr[$i]==$key)
        {
            $f++;
        }
    }
    if($f!=0)
    {
        echo "Key found $f times";
    }
    else
    {
        echo "Key not found";
    }
?>