<?php
//define trait
trait message{
    public function msg1(){
        echo "OOP is fun";
    }
    public function addnumber($num1,$num2){
        return $num1 + $num2;
    }
}

trait message2{
    public function msg2(){
        echo "OOP2 is fun";
    }
    public function addnumbers($num1,$num2){
        return $num1 + $num2;
    }
}

class welcome{
    use message,message2;
}
$obj = new welcome();
$obj->msg1();
echo "<br />";
echo $obj->addnumber(50,20);
echo "<br />";
$obj->msg2();
echo "<br />";
echo $obj->addnumbers(30,70);