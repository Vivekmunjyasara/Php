<?php

$x=10;
function printse()
{
    echo 'Value of x ';
    echo $GLOBALS['x'];
    echo '<br><br>';
    echo "Value of x ";
    $GLOBALS['x']=123;
    echo $GLOBALS['x'];
    echo '<br><br>';
    echo 'Value of x ';
    global $x;
    $x=100;
    echo "$x";
    echo '<br><br>';
    echo 'value of x';
    echo "$x";
    echo "<br><br>";
}
function prints()
{
    echo 'Value of x ';
    echo $GLOBALS['x'];
}
printse();
prints();
?>
