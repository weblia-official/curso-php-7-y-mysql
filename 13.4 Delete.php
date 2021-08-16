<?php


require('connection.php');

$mi_id = 27;

//Declaramos la consulta
$sql = "DELETE FROM comentarios WHERE id = ?";

//Preparamos la consulta

$stmt = $mysqli->prepare($sql);

//Vinculamos los parámetros

$stmt->bind_param("i", $mi_id);

//Ejecutamos la consulta

if($stmt->execute()){
    //Si la consulta se ejecutó correctamente procedemos a verificar si se afectó alguna fila
    if($stmt->affected_rows > 0){
        //Si hay por lo menos una fila afectada
        echo "Se eliminó el registro";
    }else{
        //Si no hay ninguna fila afectada
        echo "No se eliminó el comentario";
    }
}else{
    //Si hubo algún error en la codificación
    echo "Hubo un error en la consulta";
}