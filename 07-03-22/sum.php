<?php

$r=0;
$n=12345;
while($n!=0)
{
    $a=$n%10;
    $r=$r+$a;
    $n=(int)$n/10;
}
echo "sum : ".$r;

?>