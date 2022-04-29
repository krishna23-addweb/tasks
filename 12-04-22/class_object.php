<?php

class operations{
    function sum($x,$y){
        $c=$x+$y;
        echo $c."</br>";
    }
    function sub($x,$y){
        $c=$x-$y;
        echo $c."</br>";
    }
    function multiply($x,$y){
        $c=$x*$y;
        echo $c."</br>";
    }
    function divide($x,$y){
        $c=$x/$y;
        echo $c."</br>";
    }
}

$obj1 = new operations();
$obj1->sum(14,3);
$obj1->multiply(14,3);

?>