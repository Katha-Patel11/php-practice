<?php
    $m1=90;
    $m2=90;
    $m3=90;
    $m4=89;
    $m5=92;
    $tm=$m1+$m2+$m3+$m4+$m5;
    $p=($tm/500)*100;
    echo "Percentage=$p<br>";
    if($p<50)
    {
        echo "Grade F";
    }
    elseif($p>=50 && $p<60)
    {
        echo "Grade D";
    }
    elseif($p>=60 && $p<70)
    {
        echo "Grade C";
    }
    elseif($p>=70 && $p<80)
    {
        echo "Grade B";
    }
    elseif($p>=80 && $p<90)
    {
        echo "Grade A";
    }
    elseif($p>=90)
    {
        echo "Grade A+";
    }
?>