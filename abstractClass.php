<?php
 abstract class Fruit{
//properties
public $name;
public $number;
// constructor allows us not yo be using the set_name
public function __construct($name, $number){
    $this->name = $name;
    $this->number = $number;
}

 abstract public function intro() : string;

 abstract public function int() : int;

 //abstract public function float() : float;

 //abstract public function bool() : bool;

 //abstract public function array() : array;

 //abstract public function object() : object;

 //abstract public function callable() : callable;
}

class Strawberry extends Fruit{
 public function intro(): string{
    return "choose german quality! i'am an $this->name";
       }

    public function int(): int{
    return $this->number;
    }
}

class Apple extends Fruit{
    public function intro(): string{
       return "choose german quality! i'am an $this->name";
          }

    public function int(): int{
    return $this->number;
    }
}

class Orange extends Fruit{
    public function intro(): string{
       return "choose german quality! i'am an $this->name";
     }

    public function int(): int{
    return $this->number;
}
}

$strawberry = new Strawberry("green", 50);
$apple = new Apple("red", 30);
$orange = new Orange("blue", 20);

echo $strawberry->intro();
echo "<br/>";
echo $apple->intro();
echo "<br/>";
echo $orange->intro();

echo $strawberry->int();
echo "<br/>";
echo $apple->int();
echo "<br/>";
echo $orange->int();