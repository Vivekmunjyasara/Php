<?php

$cars=array("volvo","BMW","Toyota");
sort($cars);

$clength= count($cars);
for($x=0; $x < $clength; $x++)
{
    echo $cars[$x];
    echo '<br>';
}

//numbers
$numbers=array(4,6,2,22,11);
sort($numbers);

echo '<br>';
$arrlength=count($numbers);
for($x=0; $x < $arrlength; $x++)
{
    echo $numbers[$x];
    echo "<br>";
}


?>
