

<img src="images/combinatorics.png" alt="{n \choose k}"></img> 
<?php

$n=6;
$k=16;

// n choose k = n! / [k! * (n-k)!]

// To solve this combinatoric problem we only have to make repeated use of the factorial function: 
function factorial($in) {
	// 0! = 1! = 1
	$out = 1;

	// Only if $in is >= 2
	for ($i = 2; $i <= $in; $i++) {
		$out *= $i;
	}

	return $out;
}


echo "<br/><br/>";
echo "with n=$n and k=$k";
echo "<br/>";

if ($k> $n)
{
	echo "($n choose $k) = 0";
	echo "<br/>";
	echo "You can´t choose more than $n elements!";
}
else
{
	$a = factorial($n);
	$b = factorial($k);
	$c = factorial($n-$k);
	echo "($n choose $k) = $a"." / (".$b." * ".$c.") = ".$a/($b*$c);
}
?>