<?php



//El bucle While nos va a servir para ejecutar un mismo código determinado número de veces
//Va a evaluar una condición, y mientras la condición se cumpla va a ejecutar el código

$numero = 0;
while($numero < 5){
    //Mientras que número sea menor que 5, ejecutamos lo que hay aqui dentro.

    echo "Estoy en el número ".$numero;
    echo "<br>";

    $numero++;
    //número vale 5
}

//Tarea: Déjarles hacer un programa con un ciclo, que imprima la tabla del uno al 10
//Que en pantalla se vea algo así
// 10 x 1 = 10
// 10 x 2 = 20
// 10 x 3 = 30
//............
// 10 x 10 = 100