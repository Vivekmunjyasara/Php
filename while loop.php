<?php

$i=1;
while($i<6)
{
    echo '<br>';
    echo $i;
    $i++;
}
//break
$i=1;
while($i<6)
{
    echo '<br>';
    if($i==3) break;
    echo $i;
    $i++;
}

$i=0;
while($i<6)
{
    $i++;
    if($i==3) continue;
    echo $i;
}

$i=1;
while($i<6):
    echo $i;
    $i++;
endwhile;

?>
