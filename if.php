<?php
$a=5;
$b=9;
if($b>$a)
{
    echo "have a good day";
}
echo '<br><br>';
if($a<8)
{
    echo 'have a good day!';
}
echo '<br><br>';



//if and else

//shorthand
$i=5;
if($i<10) $b="hello";
echo $b;

echo '<br><br>';
$a=13;
$c=$a<10?"hello":"good bye";

echo $c;
echo "<br><br>";
//nested if
$r=13;

if($r>10)
{
    echo "Above 10";
    if($r>20)
    {
        echo "and also above 20";
    }
    else
    {
        echo "<br><br>";
        echo "but not above 20";
    }
}      




?>