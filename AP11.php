<?php
    $arr=array(30,10,90,40);
    $min=$arr[0];
    for($i=0;$i<4;$i++)
    {
        if($arr[$i]<$min)
        {
            $temp=$arr[$i-1];
            $arr[$i-1]=$arr[$i];
            $arr[$i]=$temp;
        }
        $min=$arr[$i];
    }
    print_r($arr);
?>