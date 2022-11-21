<?php
    echo "<h2><u>LOGICAL OPERATORS</u></h2>";
    $x=10;
    $y=50;
    echo ($x>$y and $y>$x)?"And operator returned true.<br>":"And operator returned false.<br>";
    echo ($x>$y or $y>$x)?"Or operator returned true.<br>":"Or operator returned false.<br>";
    echo ($x>$y xor $y>$x)?"xor operator returned true.<br>":"xor operator returned false.<br>";
    echo ($x>$y && $y>$x)?"&& operator returned true.<br>":"&& operator returned false.<br>";
    echo ($x>$y || $y>$x)?"|| operator returned true.<br>":"|| operator returned false.<br>";
    echo (!$x>$y)?"! operator returned true.<br>":"! operator returned false.<br>";
?>