<?php
 class Fruit{
//properties
public $name;
public $color;
public $weight;
const LEAVING_MESSAGE = "Thank you for visiting our fruits here";
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
    //tapping to the constant through the byebye method
    public function byebye(){
        echo self::LEAVING_MESSAGE;
    }
}
//define the Object
$strawberries  = new Strawberry("Apple", "Red", "30");
$strawberries->intro();
echo "<br/>";
echo $strawberries::LEAVING_MESSAGE;
$strawberries->byebye();
