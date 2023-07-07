<?php
class Fruit{
//properties
public $name;
public $color;
public $weight;
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
    public function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro(){
        echo "The fruits is {$this->name} and the color is
        {$this->color} and weight is {$this->weight}gram.";
       }
}
//define the Object
$strawberries  = new Strawberry("Apple", "Red", "30");
$strawberries->intro();
