<?php

    declare(strict_types=1);
    echo "strict type</br>";
    function sum(float $x,float $y){
        return $x+$y;
    }
    echo sum(4,5.1)."</br>";
    echo sum(4,"6 days");
?>