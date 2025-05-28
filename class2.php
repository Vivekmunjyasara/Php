<?php
class vegetable
{
}
class fruit
{
    //properties
public $name;
public $color;

//methods
    function set_name($name)
    {
        $this->name=$name;
    }
    function get_name()
    {
        return $this->name;
    }   
    function set_color($color)
    {
        $this->color=$color;
    }
    function get_color()
    {
        return $this->color;
    }
}

$apple=new fruit();
$apple->set_name('apple');
$apple->set_color('red');
echo'Name :'.$apple->get_name();
echo '<br>';
echo "color: ".$apple->get_color();

$apple->name="vivek";
$apple->color="blue";
echo "<br>Directly accesing value through object<br>Name ".$apple->name."<br>";
echo "color :".$apple->color."<br>";
echo "<br><br>";
echo $apple instanceof fruit?"Class Found":"Class not found";
echo "<br>";
echo $apple instanceof vegetable?"Class Found":"Class not found";

?>
