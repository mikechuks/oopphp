<?php

interface Animal {
    public function makeSound();

    public function eat(): string;
}

class Cat implements Animal{
    public function makeSound()
    {
        echo "Meow";
    }

//when there is a data type, you have to return
    public function eat(): string{
        return "Cat is eating";
    }
}

class Mouse implements Animal{
    public function makeSound()
    {
        echo "Spaeking";
    }

//when there is a data type, you have to return
    public function eat(): string{
        return "Mouse is eating";
    }
}

//make an instance of the class
/*$cat = new Cat();
$cat->makeSound();
echo $cat->eat();*/

$cat = new Cat();
$mouse = new Mouse();
//add object to an array
$animals = array($cat, $mouse);
//foreach
foreach($animals as $animal){
    echo "<br/>";
    $animal->makeSound();
    echo "<br/>";
    echo $animal->eat();
    echo "<br/>";
}