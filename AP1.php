<?php
    $arr=array(10,20,30,40,50,100,22);
    $n=count($arr);
    $max=$arr[0];
    for($i=0;$i<$n;$i++)
    {
        if($arr[$i]>$max)
        {
            $max=$arr[$i];
        }
    }
    print_r($arr);
    echo "<br>Maximum In given Input is:$max";
?>