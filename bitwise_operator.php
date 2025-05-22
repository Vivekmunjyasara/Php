<?php

echo '<h1>Bitwise operator</h1>';
//& operator
$x=10;
$y=20;

echo 'and operator ';
$c=$x & $y;
echo $c;

//|
echo '<br><br>';
echo 'or operator ';
$j=$x | $y;
echo $j;

$a=6;
$b=3;
//>> shift
echo '<br><br>';
echo '>> shift ';
$r=$x >> $y;
echo $r;

//<<

echo '<br><br>';
echo '<< shift ';
$z=$a << $b;
echo $z;

//!
echo '<br><br>';
echo '! ';
$z=($y=~$x);
echo $z;

//^

$t=2;
$o=4;
echo '<br><br>';
echo '^';
$r=$t^$o;
echo $r;


?>
