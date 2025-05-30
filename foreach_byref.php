<?php

$colors=array("red","green","blue","yellow");

foreach($colors as &$x)
{
    if($x=="blue") $x="pink";
}

var_dump($colors);


?>