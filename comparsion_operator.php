<?php
echo 'Comparsion operator';

$x=10;
$y=20;
echo '<br><br><br>';

//==
echo 'Equal Equal:- ';
var_dump($x==$y);
echo '<br><br>';

//===
echo 'Equal Equal Equal:- ';
var_dump($x===$y);
echo '<br><br>';

//!=
echo 'Not Equal:- ';
var_dump($x!=$y);
echo '<br><br>';

//<>
echo 'Not Equal:- ';
var_dump($x<>$y);
echo '<br><br>';


//!==
echo 'Not Equal:- ';
var_dump($x!==$y);
echo '<br><br>';


//>
echo 'Greater:- ';
var_dump($x>$y);
echo '<br><br>';


//<
echo 'Lesser:- ';
var_dump($x<$y);
echo '<br><br>';


//>=
echo 'Greater equal:- ';
var_dump($x>=$y);
echo '<br><br>';


//<=
echo 'Lesser equal:- ';
var_dump($x<=$y);
echo '<br><br>';

//<=>
echo 'Spaceship:- ';
var_dump($x<=>$y);
echo '<br><br>';

?>
