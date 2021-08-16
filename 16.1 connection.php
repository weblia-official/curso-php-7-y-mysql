<?php

    $mysqli = new mysqli("localhost","root","","prueba");


    if($mysqli->connect_errno){
        echo "Algo salió mal";
    }