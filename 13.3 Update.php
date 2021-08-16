<?php

require('connection.php');


$mi_nombre = "Carlos";
$mi_comentario = "Ahora cambié mi comentario y mi calificación a este que vemos con prepared statements";
$mi_calificacion = 1;

$sql = "UPDATE comentarios SET comentario = ?, calificacion = ? WHERE nombre = ?";

//Preparamos la sentencia

$stmt = $mysqli->prepare($sql);

//Vinculamos los parámetros
$stmt->bind_param('sis', $mi_comentario, $mi_calificacion, $mi_nombre);

//Ejecutamos la consulta

if($stmt->execute()){
    //Si la consulta es correcta, entonces checamos si las filas afectadas fueron mayores a 1
    if($stmt->affected_rows > 0){
        //Si la fila fue afectada entonces se modificó
        echo "Comentario modificado correctamente";
    }else{
        echo "Error al modificar comentario";
    }
}else{
    echo "Error al modificar la consulta";
}

?>