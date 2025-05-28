<?php
class fruit
{
    public function myvalue()
    {
        //method
        return __METHOD__;
        echo '<br><br>';
        //class
        return __CLASS__;
    }

    }
$kiwi=new fruit();
echo $kiwi->myvalue();
echo '<br><br>';

//DIRECTORY
echo __DIR__;
echo '<br><br>';

//FILE
echo __FILE__;
echo '<br><br>';
//function
function myvalue()
{
    return __FUNCTION__;
}
echo myvalue();
echo '<br><br>';

//file
echo __LINE__;
echo '<br><br>';







?>