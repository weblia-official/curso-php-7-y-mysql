<?php

$a = 3;
$b = 5;
//Asignación
$a = $b;
echo "<h3>Suma</h3>";
//Suma
$a = 3;
$b = 5;
$a += $b;

echo $a;

echo "<br>";

$a = 3;
$b = 5;
//Es lo mismo que
$a = $a + $b;
echo $a;


echo "<br>";

//Resta
echo "<h3>Resta</h3>";
$a = 3;
$b = 5;
$a -= $b;

echo $a;

echo "<br>";

$a = 3;
$b = 5;
//Es lo mismo que
$a = $a - $b;
echo $a;


echo "<br>";

//Multiplicación
echo "<h3>Multiplicación</h3>";
$a = 3;
$b = 5;
$a *= $b;

echo $a;

echo "<br>";

$a = 3;
$b = 5;
//Es lo mismo que
$a = $a * $b;
echo $a;


echo "<br>";

//División
echo "<h3>División</h3>";
$a = 3;
$b = 5;
$a /= $b;

echo $a;

echo "<br>";

$a = 3;
$b = 5;
//Es lo mismo que
$a = $a / $b;
echo $a;


echo "<br>";

//Concatenación
echo "<h3>Concatenación</h3>";
$var = "Hola, me llamo ";
$var2 = "Carlos";
$var .= $var2;

echo $var;

echo "<br>";

$var = "Hola, me llamo ";
$var2 = "Carlos";
//Es lo mismo que
$var = $var."".$var2;
echo $var;


echo "<br>";

//Podemos tambien usarlos con la misma variable
echo "<h3>Misma variable</h3>";
$a = 3;
$b = 5;
$a += $a;

echo $a;
//Seria lo mismo que $a = $a + $a;