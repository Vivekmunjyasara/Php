<?php

function myfunction($v1,$v2)
{
    echo $v1."<br>";
    echo $v2."<br>";
    return $v1."-".$v2;
}
$a=array("dog","cat","horse");
$b=array("bark","meow","heheheeee");
print_r(array_reduce($a,"myfunction"));

?>