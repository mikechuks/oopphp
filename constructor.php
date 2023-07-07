<?php
class Fruits{
        //properties
        public $name;
        public $color;
// constructor allows us not yo be using the set_name
public function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
}

//get color method
public function get_color(){
    return $this->color;
}

//get name method
public function get_name(){
    return $this->name;
}
}
//define the Object
$apple = new Fruits("Apple", "Red");

$banana = new Fruits("Apple", "Red");

echo $banana->get_name();
echo $banana->name;
echo "<br/>";
echo $apple->get_name();
echo $apple->name;
echo "<br/>";
echo $apple->get_color();
echo $apple->color;
echo "<br/>";
echo $banana->get_color();
echo $apple->color;
