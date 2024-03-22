<?php 
class car
{
    public $name;
    public $color;

function Car_Info() 
{ 
    echo "car name" .$this->name."<br>";
    echo "car color" .$this->color."<br>";
}
}
$mehran=new car();
$mehran->name="suzuki mehran";
$mehran->color="Dark blue";
$mehran-> Car_Info();

$toyota=new car();
$toyota->name="toyota corolla";
$toyota->color="red";
$toyota-> Car_Info();











?>