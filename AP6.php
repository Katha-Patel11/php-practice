<?php
    $Esum=0;
    $Osum=0;
    $k=0;
    for($i=0;$k!=100;$i++)
    {
        if($i%2==0)
        {
            $Esum=$Esum+$i;
            $k++;
        }
        else
        {
            $Osum=$Osum+$i;
        }
    }
    echo "Sum of Even nos : $Esum<BR>";
    echo "Sum of Odd nos : $Osum";
?>