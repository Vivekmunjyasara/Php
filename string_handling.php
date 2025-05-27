<?php

echo 'hello<br>';
echo "hello<br>";

$x='vivek';
echo "name: $x";
echo'<br>';

$y="vivek";
echo 'name:'.$y;
echo '<br><br>';

echo "strlen output:";
echo strlen("hello world");
echo '<br><br>';

echo 'world count output';
echo str_word_count("hello world");
echo '<br><br>';

echo 'strpos output: ';
$test=strpos("hello  world","jj");
echo $test?$test:"match not found";
echo "<br><br>";


$u="hello world";
echo "string uppercase:";
echo strtoupper($u);

echo "<br><br>";
$u="HELLO WORLD";
echo "string lowercase:";
echo strtolower($u);

echo '<br><br>';
$v="hello world";
echo 'string replace';
echo str_replace("world","dolly",$v);

echo '<br><br>';
$v="hello world";
echo 'string reverse: ';
echo strrev($v);


echo '<br><br>';
$v=" hello world ";
echo 'string trim: ';
echo trim($v);


echo '<br><br>';
$i="hello world";
echo 'string to array: ';
$r= explode(" ",$i);
print_r($r);
echo "<hr>";

$a="hello";
$b="world";
$z=$a.$b;
echo '<br><br>';
echo 'string adding: ';
echo $z;


$aa="hello";
$bb="world";
$zz=$aa." ".$bb;
echo '<br><br>';
echo 'string adding: ';
echo $zz;


$o="hello";
$k="world";
$g="$o $k";
echo '<br><br>';
echo 'string adding: ';
echo $g;
echo '<hr>';

echo '<br><br><u><h1>slicing</u></h1>';

$x="hello world!!";
echo substr($x,6,6);
echo '<br><br>';
$x="hello world!!";
echo substr($x,6,);

echo '<br><br>';
$x="hello world!!";
echo substr($x,-5,3);
echo '<br><br>';

$x="hi,hello how are you";
echo substr($x,4,-1);
echo '<br><br>';
$r="my name is \"vivek\"";
echo $r;

echo '<br><br>';
$r='my name is \'vivek\'';
echo $r;


echo '<br><br>';
$r="my name is \$vivek";
echo $r;
echo '<br><br>';


$t="hello\fworld";
echo $t;

echo '<br><br>';
echo "\100";
?>
