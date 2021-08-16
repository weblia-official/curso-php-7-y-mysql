<?php


/* Podemos utilizar ciclos o bucles anidados */

//Haz un programa que haga todas las tablas de multiplicar, desde la del 1 hasta la del 10


for( $i = 1; $i <= 10; $i++ ){
    for( $j = 1; $j <= 10; $j++ ){
        echo "$i X $j = ".($i*$j);
        echo "<br>";
    }
    echo "<br>";
}

//Tarea: Hacer una piramide de asteriscos con un for anidado

/*

*
**
***
****
*****
******
*******
********
*********
**********