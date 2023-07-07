<?php
class Fruit{
    //properties
    public $name;
    public $color;

    //method
    public function set_name($name){
        $this->name = $name;
    }

    //get name method
    public function get_name(){
        return $this->name;
    }

    //method
    public function set_color($color){
        $this->color = $color;
    }

    //get color method
    public function get_color(){
        return $this->color;
    }
}

//define the object
$apple = new Fruit();

$apple->set_name("Apple");
$apple->set_color("green");

$banana = new Fruit();

$banana->set_name("Banana");
$banana->set_color("red");

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