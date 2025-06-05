<?php

$cars=array("volvo","BMW","Toyota");
rsort($cars);

$clength=count($cars);
for($x=0; $x < $clength ;$x++)
{
    echo $cars[$x];
    echo "<br>";
}

//numbers
$num=array(4,2,6,22,11);
rsort($num);

$arrlength=count($num);
for($x=0; $x < $arrlength; $x++)
{
    echo $num[$x];
    echo "<br>";
}

?>

