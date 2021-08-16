<?php

//Nos servirá para realizar comparaciones rápidas

$puerta = TRUE;

$movimiento = ($puerta)?("abrir"):("cerrar");

echo $movimiento;
echo "<br>";


$resultado = (3 == 4)?("Tres es igual a cuatro"):("Tres no es igual a cuatro");
echo $resultado;