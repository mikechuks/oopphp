<?php
//with static method, you don't have to call the instance of the class
class Greeting{
    public function __construct($num, $num1){
        echo self::addNumber($num,$num1);
    }
    public static function welcome(){
        echo "Hello World";
    }
    public static function addNumber($num,$num1){
        return $num + $num1;
    }
}

//Call static method
//Greeting::welcome();
//echo Greeting::addNumber(50,20);
new Greeting(50,7);