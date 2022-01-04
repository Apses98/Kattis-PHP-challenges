<?php

//Read two int's to R1 and S1
fscanf(STDIN, "%d %d", $R1, $S);

//type cast to int
$R1 = (int) $R1 ;
$S = (int) $S ;

// Calculate R2 
$R2 = ( $S * 2 ) - $R1  ;

// echo R2
echo $R2 ;

?>