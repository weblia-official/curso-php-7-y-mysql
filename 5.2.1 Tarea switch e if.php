<?php

//El switch nos va a servir para comparar el contenido de una variable y hacer una acción dependiendo del valor
//Si el valor no coincide con ningun caso(case) ejecuta el valor que está en default
//La sentencia break termina la ejecución del switch o del caso.


//Vamos a hacer el ejemplo de un elevador
$pisoAnterior = 4;
$pisoTecleado = 2;


switch($pisoTecleado){
    case 1:
        if($pisoAnterior < $pisoTecleado){
            echo "Subiendo del piso $pisoAnterior al piso $pisoTecleado";
        }else{
            echo "Bajando del piso $pisoAnterior al piso $pisoTecleado";
        }
        break;
    case 2:
        if($pisoAnterior < $pisoTecleado){
            echo "Subiendo del piso $pisoAnterior al piso $pisoTecleado";
        }else{
            echo "Bajando del piso $pisoAnterior al piso $pisoTecleado";
        }
        break;
    case 3:
        if($pisoAnterior < $pisoTecleado){
            echo "Subiendo del piso $pisoAnterior al piso $pisoTecleado";
        }else{
            echo "Bajando del piso $pisoAnterior al piso $pisoTecleado";
        }
        break;
    case 4:
        if($pisoAnterior < $pisoTecleado){
            echo "Subiendo del piso $pisoAnterior al piso $pisoTecleado";
        }else{
            echo "Bajando del piso $pisoAnterior al piso $pisoTecleado";
        }
        break;
    default:
        echo "Nos quedamos en el piso que estamos, o teclearon un piso que no existe";
        break;
}
$pisoAnterior = $pisoTecleado;

//echo $pisoAnterior;