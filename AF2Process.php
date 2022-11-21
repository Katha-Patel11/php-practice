<?php
    $arr=$_POST['num'];
    asort($arr);
    echo "Ascending Order: ";
    print_r($arr);
    echo "<br>";
    echo "Sum of array :".array_sum($arr);
    echo "<br>";
?>