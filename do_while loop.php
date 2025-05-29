<?php

//do while loop
$i=1;
do{
    echo $i;
    $i++;
}while($i<6);

for($x=0;$x<=10;$x++)
{
    echo "the number is:$x<br>";
}

for($x=0;$x<=10;$x++)
{
    if($x==3) break;
    echo "the number is:$x<br>";
}

for($x=0;$x<=10;$x++)
{
    if($x==3) continue;
    echo "the number is:$x<br>";
}

?>
