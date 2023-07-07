<?php
//define static property
class pi{
    public static $value = 3.46785;

    public function staticValue(){
        return self::$value;
    }
}

//Get static property
//echo pi::$value;
$pi = new pi();
echo $pi->staticValue();