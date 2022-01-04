<?php

// Scan the input 
fscanf(STDIN, "%d", $ori);

// The first number x % 10 

$d1 = ($ori % 10) ; 

// The secund number
$d2 = ($ori - $d1) / 10;

$d1 = $d1 * 10;
// The Result (swaped number)

$res = $d1 + $d2 ;

echo $res;

?>