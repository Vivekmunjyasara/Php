<?php
function myfunction()
{
    echo "This text comes from a function";
}

//create array
$myArr=array('volvo',15,'apples','bananas',myfunction());

//calling the function from the array item
 echo $myArr[0];
 
?>
