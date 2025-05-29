<?php
//for each

$colors=array("red","green","blue","yellow");

foreach ($colors as $x)
{
    echo "$x <br>";
}

$members=array("peter"=>"35","ben"=>"37","joe"=>"43");

foreach ($members as $x=>$y)
{
    echo "$x : $y <br>";
}

class car
{
    public $color;
    public $model;
    
    public function __construct($color,$model) 
    {
        $this->color=$color;
        $this->model=$model;
    }
}

$mycar=new car("red","volvo");

foreach ($mycar as $x=>$y)
{
    echo "$x : $y<br>";    
}






?>
