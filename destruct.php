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
//destruct
public function __destruct(){
 echo "The fruits is {$this->name} and the color is
 {$this->color}.";
}
}
//define the Object
$apple = new Fruits("Apple", "Red");

$banana = new Fruits("Apple", "Red");

