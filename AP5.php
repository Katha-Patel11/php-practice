<?php
    $x=10;
    $y=4;
    if ($x > $y)
    {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
      
    for($i = 1; $i < ($x+1); $i++)
    {
        if ($x%$i == 0 and $y%$i == 0)
        {
          $gcd = $i;
        }
    }
    $lcm=($x*$y)/$gcd;
    echo "GCD of $x and $y is: $gcd<BR>";
    echo "LCM of $x and $y is: $lcm";
?>