<?php
    function prime($a)
    {
        $c=0;
        for($i=1;$i<=$a;$i++)
		{
			if($a%$i==0)
			{
				$c++;
			}
		}
		if($c==2)
		{
			return 1;
		}
		else
		{
			return 0;
		}

    }
    $n=prime(7);
    if($n==1)
    {
        echo "Number is prime";
    }
    else
    {
        echo "Number is not prime";
    }
?>