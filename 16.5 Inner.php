<?php

require('connection.php');

//El inner Join nos va a unir los resultados de los tablas
//En este caso le estamos diciendo que una los resultados de una publicación
//la cual tenga en id_usuario el mismo id que un usuario en la tabla users

//Recordarles y enseñarles que se les puede poner sobre nombres
$sql = "SELECT p.titulo, p.contenido, p.imagen, p.fecha, u.usuario, u.contrasena FROM publicaciones p INNER JOIN users u ON p.usuario_id = u.id";
$stmt = $mysqli->prepare($sql);

$stmt->execute();

$stmt->store_result();

if($stmt->num_rows > 0){
    $stmt->bind_result($titulo,$contenido,$imagen,$fecha,$usuario,$contrasena);
    while($stmt->fetch()){
        echo "<h4>Datos de publicaciones</h4>";
        echo $titulo."<br>";
        echo $contenido."<br>";
        echo $imagen."<br>";
        echo $fecha."<br>";

        echo "<h4>Datos del usuario</h4>";
        echo $usuario."<br>";
        echo $contrasena."<br>";
    }
}

?>
<li class="miClase"></li>

<style>
.miClase{
    padding-right:30px;
}
</style>