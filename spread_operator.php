<?php

$arr1=[4,5];
$arr2=[1,2,3,...$arr1];

print_r($arr2);

echo "<br><br><br>";
//new one
$vi=[1,2,3];
$ha=[4,5,6];
$haa=[...$vi,...$ha];

print_r($haa);

echo "<br><br><br>";
//array merge
$num1=[1,2,3];
$num2=[4,5,6];
$num3=array_merge($num1,$num2);

print_r($num3);















?>