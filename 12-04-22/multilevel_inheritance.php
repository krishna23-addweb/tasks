<?php

class A{
    function show(){
        echo "result is : ";
    }
}
class B extends A{
    function sum($a,$b){
        $c=$a+$b;
        echo $c;
    }
}
class C extends A{
    function multiply($a,$b){
        $c=$a*$b;
        echo $c;
    }
}
$obj1= new B();
$obj2= new C();
$obj1->show();
$obj1->sum(5,3);
$obj2->show();
$obj2->multiply(5,3);
?>