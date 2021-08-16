<?php
echo "<h3>AND</h3><br>";
//Operador lógico AND
//Será verdadero si los dos son verdaderos
$a = TRUE;
$b = FALSE;

$c = TRUE;
$d = FALSE;
$resultado = ($a and $c);

var_dump($resultado);
echo "<br>";

$resultado = ($a && $d);

var_dump($resultado);
echo "<br>";

echo "<h3>OR</h3><br>";
//OR
//Será verdadero con que uno de los dos sea verdadero(o los dos sean verdadero)
$resultado = ($a OR $c);

var_dump($resultado);
echo "<br>";

$resultado = ($a || $d);

var_dump($resultado);
echo "<br>";

$resultado = ($b || $d);

var_dump($resultado);
echo "<br>";

echo "<h3>XOR</h3><br>";
//XOR
//Será verdadero si solo uno de los dos es verdadero(no pueden ser verdaderos los dos)
$resultado = ($a XOR $c);

var_dump($resultado);
echo "<br>";

$resultado = ($a XOR $d);

var_dump($resultado);
echo "<br>";

$resultado = ($b XOR $d);

var_dump($resultado);
echo "<br>";

