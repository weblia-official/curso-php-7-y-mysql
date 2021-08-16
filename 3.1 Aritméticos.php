<?php

//Operadores aritméticos

$num1 = 15;
$num2 = 5;

//Suma
echo "Suma: $num1 + $num2 =  ".($num1 + $num2);
echo "<br>";

//Resta
echo "Resta: $num1 - $num2 = ".($num1 - $num2);
echo "<br>";

//División
echo "División: $num1 / $num2 = ".($num1 / $num2);
echo "<br>";

//Multiplicación
echo "Multiplicación: $num1 * $num2 = ".($num1 * $num2);
echo "<br>";

//Negación
echo "Negación de $num1: ".(-$num1);
echo "<br>";

//Módulo
echo "Módulo: $num1 % $num2 = ".($num1 % $num2);
echo "<br>";

echo "Módulo: 34 % 5 = ".(34 % 5);
echo "<br>";

//Potencia

echo "Dos elevado a la 3 = ".(2**3);
echo "<br>";
echo "Esto es igual a 2*2*2";
echo "<br>";


//Jerarquía de operaciones
echo "<h3>Precedencia de operadores</h3>";
echo "1+4*5= ".(1+4*5);
echo "<br>";

//Si queremos realizar primero la suma y despues la multiplicación usamos paréntesis
echo "(1+4)*5= ".((1+4)*5);
echo "<br>";

echo "2**3*8= ".(2**3*8);
echo "<br>";

//Si queremos que se realice la multiplicación antes de la potencia usamos paréntesis
echo "2**(3*8)= ".(2**(3*8));
echo "<br>";

//Si tenemos varios de la misma jerarquia se realiza de izquierda a derecha

echo "1+4+6*4*2 = ".(1+4+6*4*2);
echo "<br>";


