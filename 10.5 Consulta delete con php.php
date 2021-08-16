<?php
//Primero llamamos a la conexión a la base de datos
require('../connection.php');
//Como está en una carpeta anterior retrocedemos con dos puntos y diagonal ../


//Declaramos una variable, para determinar el id del usuario que queremos borrar
$mi_id = 6;


//Después, guardamos en una variable nuestro QUERY, que es nuestra consulta que vamos a ejecutar posteriormente
$sql = "DELETE FROM usuarios WHERE id='$mi_id'";

//En otra variable guardamos el resultado de la ejecución del QUERY, utilizamos la variable de nuestra conexión $mysql, para llamar a un
//método(función) llamado QUERY que va a ejecutar la consulta.
$resultado = $mysqli->query($sql);


//Hay que checar si se ejecutó nuestro QUERY
if($resultado){
    //También hay que validar que se haya afectado alguna columna
    if($mysqli->affected_rows){
        echo "Se borró el usuario con éxito";
    }else{
        echo "Ese usuario no existe";
    }
}else{
    //En caso de que haya un error lo imprimimos
    echo "Hubo un error en la consulta".$mysqli->error;

    //Recuerden que este tipo de errores no se deben mostrar al usuario, por que pueden ser vulnerabilidades.
}

?>