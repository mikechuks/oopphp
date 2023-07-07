<?php
class Fruit{
        //properties
        public $name;
        public $color;
// constructor allows us not yo be using the set_name
public function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
}

public function intro(){
 echo "The fruits is {$this->name} and the color is
 {$this->color}.";
}
}

class Strawberry extends Fruit{
    public function message(){
        echo "Am I a fruit or a berry? ";
    }
    public function add($num, $num2){
        echo $num + $num2;
    }
}
//define the Object
$strawberries  = new Strawberry("Apple", "Red");
$strawberries->message();
$strawberries->add(10,5);
echo $strawberries->name;
echo $strawberries->color;
$strawberries->intro();


