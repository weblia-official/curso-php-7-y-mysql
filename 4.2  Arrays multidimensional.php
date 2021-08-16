<?php


//Estos arreglos también se pueden declarar de dos maneras

$diaMes[0][0] = 23; 
$diaMes[0][1] = "Marzo";
$diaMes[1][0] = 13;
$diaMes[1][1] = "Diciembre";

/* -----------------------

[0][0]      [0][1]
  23         Marzo

[1][0]      [1][1]
  13       Diciembre


--------------------------- */

echo $diaMes[0][0]." de ".$diaMes[0][1];

//Otra manera para utilizarlos

$diaMeses = array(
                array(23,"Marzo"),
                array(13,"Diciembre")
);

echo $diaMeses[0][0]." de ".$diaMeses[0][1];
