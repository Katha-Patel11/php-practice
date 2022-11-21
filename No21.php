<?php
    echo "1.Addition<br>2.Subtraction<br>3.Multiplication<br>4.Divison<br><br>";
    $a=4;
    $m=20;
    $n=10;
    switch ($a) 
    {
        case 1:
            $ans=$m+$n;
            echo "Addition:$ans";
            break;
        case 2:
            $ans=$m-$n;
            echo "Subtraction:$ans";
            break;
        case 3:
            $ans=$m*$n;
            echo "Multiplication:$ans";
            break;
        case 4:
            $ans=$m/$n;
            echo "Division:$ans";
            break;
        default:
            echo "Wrong Choice";
            break;
    }
?>