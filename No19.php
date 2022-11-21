<?php
    $a=$_POST['txt1'];
    $s=$_POST['txt2'];
    $e=$_POST['txt3'];
    for($i=$s;$i<=$e;$i++)
    {
        $m=$a*$i;
        echo "$a X $i = $m<br>";
    }
?>