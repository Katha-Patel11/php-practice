<?php
    $arr=array("20","40","60","80","90","100");
    shuffle($arr);
    foreach($arr as $value)
    {
        echo "$value<br>";
    }
?>