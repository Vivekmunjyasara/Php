<?php

$age=array("peter"=>"35","Ben"=>"37","joe"=>"43");
krsort($age);


foreach($age as $x => $x_value)
{
    echo "Key=".$x.",Value=".$x_value;
    echo "<br>";
}



?>