<?php
function Fact($number)
{
	$factorial = 1;
	for ($i = 1;$i <$number;$i++)
	{
		$factorial += $factorial * $i;
	}
	return $factorial;
}

$number = 10;
$fact = Fact($number);
echo 'Factorial = '.$fact;



?>