<?php
//Primero llamamos a la conexión a la base de datos
require('../connection.php');
//Como está en una carpeta anterior retrocedemos con dos puntos y diagonal ../

//Voy a declarar unas variables que nos servirán para modificar datos a la BD

$mi_id = 14;
$mi_nombre = "María";
$mi_usuario = "Mary33";
$mi_password = "Mart54";

//Comenzamos a introducir a la base de datos.

//Creamos una variable en donde se guardará nuestro QUERY, que es la consulta que haremos a la base de datos
$sql = "UPDATE usuarios SET nombre='$mi_nombre', usuario='$mi_usuario', password='$mi_password' WHERE id='$mi_id'";

//En otra variable guardamos el resultado de la ejecución del QUERY, utilizamos la variable de nuestra conexión $mysql, para llamar a un
//método(función) llamado QUERY que va a ejecutar la consulta.

$resultado = $mysqli->query($sql);

if($resultado){
    //Evaluamos si el resultado es TRUE, significa que se realizó correctamente nuestro QUERY
    if($mysqli->affected_rows > 0){
        echo "Usuario modificado correctamente";
    }else{
        echo "Ese usuario no existe";
    }
}else{
    echo "Hubo un error al modificar el usuario. Error: ".$mysqli->error;
     //Recuerden que este tipo de errores no se deben mostrar al usuario, por que pueden ser vulnerabilidades.
}

?>