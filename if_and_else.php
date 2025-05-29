<?php

echo "<br><br>";
$t=date("H");

if($t<"20")
{
    echo "have a good day";
}
else
{
    echo "have a good night";
}
echo '<br><br>';

if($t<"10")
{
    echo "have a good morning!";
}
elseif($t<"20")
{
    echo "have a good day";
}
else
{
    echo "gave a good night!";
}
echo '<br><br>';

?>