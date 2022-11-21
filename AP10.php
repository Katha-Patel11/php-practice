<?php
    $arr=array(10,20,30,40,50,60,70,80,90,100);
    echo "Numbers are:<br>";
    for($i=0;$i<10;$i++)
    {
        echo "$arr[$i] , ";
    }
    $sum=0;
    for($i=0;$i<10;$i++)
    {
        $sum=$sum+$arr[$i];
    }
    echo "<BR>Sum of the numbers is : $sum";
    $avg=$sum/10;
    echo "<BR>Average of the numbers is : $avg";
?>