<?php

//Recordemos que el array unidimensional solo es como la caja que solo tiene una posición


//Primera forma para utilizarlo:

    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo");
    //              0           1          2        3       4

    echo $meses[0];
    echo "<br>";
    echo $meses[4];
    echo "<br>";

    //Segunda manera de utilizarlo
    $mes[0] = "Enero";
    $mes[1] = "Febrero";
    $mes[2] = "Marzo";
    $mes[3] = "Abril";
    $mes[4] = "Mayo";

    echo $mes[1];

    //Si no ponemos números, PHP los asigna automáticamente como vayamos insertando los datos

    $dia[] = "Lunes"; // A este le asigna la posición 0
    $dia[] = "Martes";// A este la 1
    $dia[] = "Miércoles"; // A este la 2
