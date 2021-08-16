<?php

$mysqli = new mysqli("localhost","root","","curso");


//Evaluamos que se haya conectado correcatmente

if($mysqli->connect_errno){
    //echo "Fallo al conectar, número de error".$mysqli->connect_errno."<br>Descripción del error ".$mysqli->connect_error;

    echo "Algo salió mal, intentalo de nuevo más tarde";
}else{
    //echo "Se conectó exitosamente";
}

