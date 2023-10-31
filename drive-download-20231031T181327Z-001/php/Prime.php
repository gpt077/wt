<?php
	$number = 10;
	$n = 0;
	for($i = 2;$i<$number;$i++)
	{
		if($number % $i == 0)
		{
		$n++;
		break;
		}
	}
if($n == 0)
{
	echo $number.' is a prime number';
}
else
{
	echo $number.' is not a prime number';
}
	
?>