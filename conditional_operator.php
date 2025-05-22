<?php

$x=10;
$y=20;

echo '<h1>conditional operator</h1>';
$a=$x<$y?"true":"false";
echo $a;

//??
$t=10;
$u;
echo '<br><br>';
$t=$u??"false";

echo $t;

?>
