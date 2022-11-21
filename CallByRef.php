<?php
    function swap(&$a,&$b)
    {
        $t=$a;
        $a=$b;
        $b=$t;
    }
    $x=10;
    $y=20;
    echo "Before swap:$x  $y<br>";
    swap($x,$y);
    echo "After swap:$x  $y";
?>