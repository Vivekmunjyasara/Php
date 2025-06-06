<?php

function myfunction($a,$b)
{
    var_dump($a);
    var_dump($b);
    var_dump($a>$b);
    echo "<br><br>";
    
    if($a===$b)
    {
        echo "$a hi $b <br>";
        return 0;
    }
        echo "$a hello $b <br>";
        echo (($a>$b)?1:-1);
        echo "<br>";
        return ($a>$b)?1:-1; 
}
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result= array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);


?>
