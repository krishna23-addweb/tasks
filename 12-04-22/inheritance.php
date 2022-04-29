<?php

class A{
    function show(){
        echo "sum: ";
    }
}
class B extends A{
    function sum($a,$b){
        $c=$a+$b;
        echo $c;
    }
}
$obj1= new B();
$obj1->show();
$obj1->sum(5,3);
?>
