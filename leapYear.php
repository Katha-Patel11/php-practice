<?php
    $y=2021;
    if($y%4==0 and $y%100!==0 or $y%400==0)
    {
        echo "$y is leap year";
    }
    else
    {
        echo "$y is not a leap year";
    }
?>