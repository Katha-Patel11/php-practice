<?php
    $s=$_POST['txt1'];
    $e=$_POST['txt2'];
    for($i=$s;$i>=$e;$i--)
    {
        if($i%3==0)
        {
            echo "<table border='2'>";
            echo "<tr><td>$i</td></tr>";
        }
    }
?>