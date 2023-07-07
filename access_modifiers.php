<?php
class Fruit{
public $name;
protected $color;
private $weight;

//get name method
public function get_name(){
    return $this->name;
}

//get color method
protected function get_color(){
    return $this->color;
}
}
//define the Object
$apple = new Fruit();

$apple->name = "ada";//Good
echo $apple->name;
//$apple->color = "Blue";//Error
//$apple->weight = "12kg";//Error
$apple->get_name();
//$apple->get_color();

