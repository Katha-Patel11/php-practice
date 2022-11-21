<?php
    $no=90;
    if($no<100)
    {
        echo "$no is smaller than 100.<br>";
        if($no%2==0)
        {
            echo "$no is even.";
        }
        else
        {
            echo "$no is odd";
        }
    }
    else
    {
        echo "$no is greater than 100.";
    }
?>