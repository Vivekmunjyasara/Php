<?php
echo '<h1>Logical operator</h1>';
$x=10;
$y=20;

//and
echo 'And operator:- ';
var_dump($z=($x>10 and $x<5));
echo $z;
echo '<br><br>';

//Or
echo 'Or operator:- ';
var_dump($z=($x>=10 or $y<=20));
echo $z;
echo '<br><br>';


//&&
echo '&& operator:- ';
$z=$x>$y && $y<$x;
echo $z;
echo '<br><br>';


//||
echo '|| operator:- ';
$z=$x>=7 || $y>$x;
echo $z;
echo '<br><br>';

//!
$x=1;
$y=0;

echo '! operator:- ';
$z=!($x==1 or $y==1)?true:false;
echo ( boolval($z)?'true':'false')."<br><br>";


?>
