<html>
<body>
	<?php
		$a=7;
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
			echo "$a is prime";
		}
		else
		{
			echo "$a is not prime";
		}
	?>
</body>
</html>