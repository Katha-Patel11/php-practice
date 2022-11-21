<?php
    echo "<h2><u>ARRAY OPERATORS</u></h2>";
    $a=array(10,20,'hi');
    $b=array(10,20,'hi');
    $z=$a+$b;
    print_r($z);
    echo "<bR>";
    echo ($a==$b)?"True":"False";
    echo "<bR>";
    echo ($a===$b)?"True":"False";
    echo "<bR>";
    echo ($a!=$b)?"True":"False";
    echo "<bR>";
    echo ($a<>$b)?"True":"False";
    echo "<bR>";
    echo ($a!==$b)?"True":"False";
?>