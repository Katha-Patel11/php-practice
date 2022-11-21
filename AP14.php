<?php
    function add($a,$b)
    {
        $sum=$a+$b;
        return $sum;
    }
    function average($x,$y)
    {
        $avg=($x+$y)/2;
        return $avg;
    }
    echo "Sum of two Nos. : ".add(5,3);
    echo "<BR>Average of two Nos. : ".average(5,3);
?>