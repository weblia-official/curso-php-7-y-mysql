<?php

    require('connection.php');

    $mi_id = NULL;
    $mi_nombre = "Jose Luis";
    $mi_comentario = "Muy bien";
    $mi_fecha = date("Y-m-d H:i:s");
    $mi_calificacion = 4;
    //Creamos nuestro sql
    $sql = "INSERT INTO comentarios(id, nombre, comentario, fecha, calificacion) VALUES(?,?,?,?,?)";

    //Preparamos la sentencia
    $stmt = $mysqli->prepare($sql);

    //Vinculamos los parámetros
    $stmt->bind_param("isssi", $mi_id,$mi_nombre,$mi_comentario, $mi_fecha,$mi_calificacion);

    //Ejecutamos la consulta
    if($stmt->execute()){
        echo "Datos insertados correctamente";
    }else{
        echo $stmt->error;
    }

    echo "<pre>";
    var_dump($stmt);
    echo "</pre>";