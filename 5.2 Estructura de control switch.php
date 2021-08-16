<?php

//El switch nos va a servir para comparar el contenido de una variable y hacer una acción dependiendo del valor
//Si el valor no coincide con ningun caso(case) ejecuta el valor que está en default
//La sentencia break termina la ejecución del switch o del caso.


//Vamos a hacer el ejemplo de un elevador
$pisoAnterior = 0;//Planta baja
$pisoTecleado = 2;


switch($pisoTecleado){
    case 1:
        echo "Se pulso el número 1, subimos al piso 1";
        break;
    case 2:
        echo "Subimos al piso 2";
        break;
    case 3:
        echo "Subimos al piso 3";
        break;
    case 4:
        echo "Subimos al piso 4";
        break;
    default:
        echo "Nos quedamos en el piso que estamos.";
        break;
}