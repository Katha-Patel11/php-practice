<?php
    $a=10;
    $b=20;
    echo "Before Swap:<br>a=$a<br>b=$b";
    $a=$a+$b;
    $b=$a-$b;
    $a=$a-$b;
    echo "<br>After Swap:<br>a=$a<br>b=$b";
?>