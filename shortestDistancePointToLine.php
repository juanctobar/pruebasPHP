<?php
// (x1, y1)
$x1=5;
$y1=2;
echo "(x1, y1) = ($x1, $y1)"."<br/>";

// (x2, y2)
$x2=7;
$y2=2;
echo "(x2, y2) = ($x2, $y2)"."<br/>";

// (x3, y3)
$x3=7;
$y3=5;
echo "(x3, y3) = ($x3, $y3)"."<br/><br/>";

// Line defined by two points (x1, y1) (x2, y2)
if ($x1 == $x2)
{
	echo "Line defined by two points (x1, y1) and (x2, y2):"."<br/><br/>";
	echo "    x = $x1";
}
else
{	
	echo "Line defined by two points (x1, y1) and (x2, y2):"."<br/><br/>";
	echo "    y = a*x + b"."<br/><br/>";
	$a = ($y2-$y1)/($x2-$x1);
	echo "    a = (y2-y1)/(x2-x1) = ".($y2-$y1)." / ".($x2-$x1)." = ".$a;
	echo "<br/>";
	$b = ($y1*$x2-$y2*$x1)/($x2-$x1);
	echo "    b = (y1*x2 - y2*x1) / (x2-x1) = ".($y1*$x2-$y2*$x1)." / ".($x2-$x1)." = ".$b;
}
echo "<br/><br/>";

// Distance from the point (x3, y3) to the line
if ($x1 == $x2)
{
	if ($x3 == $x1)
		echo "The point is on the line.";
	elseif ($x3 > $x1)
		echo "The point is on the right side of the line at ".$x3-$x1." units of distance.";
	else
		echo "The point is on the left side of the line at ".$x3-$x1." units of distance.";
	
}
else
{
	$num = ($a*$x3-$y3+$b);
	$den = sqrt(pow($a,2) + 1);
	$dist = $num/$den;
	
	echo "distance(P, L) = (a*x3 - y3 + b) / sqrt(pow(a,2) + 1) = ".$num." / ".$den." = ".$dist;
	echo "<br/><br/>";
	
	if ($dist == 0)
		echo "The point is on the line.";
	elseif ($dist > 0)
		echo "The point is under the line.";
	elseif ($dist < 0)
		echo "The point is over the line.";
}
?>
