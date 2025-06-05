<?php

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result= array_diff_key($a2,$a1);
print_r($result);

?>
