<?php


//Una variable estática existe solo dentro del ambito de la función, pero esta no pierde su valor.

function variablesNormales(){

    $b = 0;
    echo $b;
    $b++;
}

variablesNormales();
variablesNormales();
variablesNormales();
variablesNormales();
echo "<br>";

function variablesEstaticas(){

    static $b = 0;
    echo $b;
    $b++;
}

variablesEstaticas();
variablesEstaticas();
variablesEstaticas();
variablesEstaticas();

