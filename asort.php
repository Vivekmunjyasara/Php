<?php

$age=array("peter"=>"35","ben"=>"37","Joe"=>"43");
asort($age);

foreach($age as $x => $x_value)
{
    echo "Key=".$x.",value=".$x_value;
    echo '<br>';
}

echo '<br><br>';
//descending
$age=array("peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);


foreach($age as $x => $x_value)
{
    echo "Key=".$x.",Value=".$x_value;
    echo '<br>';
}




?>
