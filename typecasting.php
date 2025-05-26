<?php
//string example
echo "<h1>string conversion</h1>";
$a='5';
var_dump($a);
echo '<br><br>';
$b=$a;
var_dump($b);
echo '<br><br>';

//int conversion
echo "string to int conversion: ";
$c=(int)($a);
var_dump($c);
echo '<br><br>';

//float conversion
echo "string to float conversion: ";
$c=(float)($a);
var_dump($c);
echo '<br><br>';

//boolean conversion
echo "string to boolean conversion: ";
$c=(boolean)($a);
var_dump($c);
echo '<br><br>';
echo "<hr>";

//int conversion
echo "<h1>int conversion</h1>";
$v=5;
var_dump($v);
echo '<br><br>';
$j=$v;
var_dump($j);
echo '<br><br>';

//string conversion
echo "int to string conversion: ";
$d=(string)($v);
var_dump($d);
echo '<br><br>';

//float conversion
echo "int to float conversion: ";
$d=(float)($v);
var_dump($d);
echo '<br><br>';

//boolean conversion
echo "int to boolean conversion: ";
$d=(boolean)($v);
var_dump($d);
echo '<br><br>';
echo "<hr>";



//float conversion
echo "<h1>float conversion</h1>";
$u=9.99;
var_dump($u);
echo '<br><br>';
$e=$u;
var_dump($e);
echo '<br><br>';

//string conversion
echo "float to string conversion: ";
$e=(string)($u);
var_dump($e);
echo '<br><br>';

//int conversion
echo "float to int conversion: ";
$e=(int)($u);
var_dump($e);
echo '<br><br>';

//boolean conversion
echo "float to boolean conversion: ";
$e=(boolean)($u);
var_dump($e);
echo '<br><br>';
echo "<hr>";


//boolean conversion
echo "<h1>boolean conversion</h1>";
$f=true;
var_dump($f);
echo '<br><br>';
$h=$f;
var_dump($h);
echo '<br><br>';

//string conversion
echo "boolean to string conversion: ";
$h=(string)($f);
var_dump($h);
echo '<br><br>';

//float conversion
echo "boolean to float conversion: ";
$h=(float)($f);
var_dump($h);
echo '<br><br>';

//int conversion
echo "boolean to int conversion: ";
$h=(int)($f);
var_dump($h);
echo '<br><br>';
echo "<hr>";



?>