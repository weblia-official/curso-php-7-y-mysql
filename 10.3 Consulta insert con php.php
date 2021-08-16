<?php
//Primero llamamos a la conexión a la base de datos
require('../connection.php');
//Como está en una carpeta anterior retrocedemos con dos puntos y diagonal ../

//Voy a declarar unas variables que nos servirán para agregar datos a la BD

$mi_nombre = "Fernanda";
$mi_usuario = "Fer_22";
$mi_password = "5578Fer";

//Comenzamos a introducir a la base de datos.

//Creamos una variable en donde se guardará nuestro QUERY, que es la consulta que haremos a la base de datos
$sql = "INSERT INTO usuarios(id, nombre, usuario, password) VALUES(NULL,'$mi_nombre','$mi_usuario','$mi_password')";
//Hay que notar que mis variables están entre comillas simples

//En otra variable guardamos el resultado de la ejecución del QUERY, utilizamos la variable de nuestra conexión $mysql, para llamar a un
//método(función) llamado QUERY que va a ejecutar la consulta.

$resultado = $mysqli->query($sql);

if($resultado){
    //Evaluamos si el resultado es TRUE, significa que se realizó correctamente nuestro QUERY
        echo "Usuario insertado correctamente";
}else{
    echo "Hubo un error al insertar el usuario. Error: ".$mysqli->error;
     //Recuerden que este tipo de errores no se deben mostrar al usuario, por que pueden ser vulnerabilidades.
}

?>