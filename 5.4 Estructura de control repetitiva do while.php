<?php


/* El doWhile va a servir para lo mismo que el while, pero la diferencia
es que el doWhile ejecuta primero el código y despues mira que se cumpla la condición.
El while primero checa que se cumpla la condición y despues ejecuta el código. */


$numero = 0;
do{
    echo "Yo me ejecuto primero, y después evalúo la condición";
    echo "<br>";
    $numero++;
} while($numero < 3);



$numero2 = 0;
while($numero2 < 3){
    echo "Yo primero evalúo a condición, y si se cumple ejecuto el código";
    echo "<br>";
    $numero2++;
}

