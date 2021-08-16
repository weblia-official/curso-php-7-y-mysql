<?php

require('connection.php');

    $mi_id = 15;
    //Creamos el query, el cual en el parámetro vamos a sustituirlo con un ?
    $sql = "SELECT * FROM comentarios WHERE nombre = ?";

    //Preparamos la sentencia
    //Estos quiere decir que le vamos a enviar la consulta a mysql solo una vez
    $stmt = $mysqli->prepare($sql);

    //Después vinculamos los valores, en este caso estoy diciendo que $mi_id se va a vincular con el símbolo ? 
    //Tenemos distintos tipos de valores que podemos pasar, en este caso puse la letra i por que es un integer(número entero)
    /*
    i = integer (número entero)
    s = string o cadena de texto
    d = double (número decimal)
    */
    $stmt->bind_param('i', $mi_id);

    //Ejecutamos la sentencia
    $stmt->execute();

    //Almacenamos el resultado de la sentencia
    $stmt->store_result();
    //La ejecución y el almacenamiento serían parecidos a $result = $mysqli->query($sql);
    echo "<pre>";
    var_dump($stmt);
    echo "</pre>";

    if($stmt->num_rows > 0){
    //Si el número de filas es mayor a 0
        //Vinculamos los resultados, esto quiere decir que los vamos a guardar en estas variables
        $stmt->bind_result($id,$nombre,$comentario,$fecha,$calificacion);
        
        //Listamos los resultados, esto quiere decir que vamos a listar cada resultado en su variable que elegimos antes
        $stmt->fetch();

        echo $id;
        echo $nombre;
        echo $comentario;
        echo $fecha;
        echo $calificacion;

    }
    //Enseñarles que se puede hacer con un solo campo, que se puede hacer sin parámetros y que ya no afecta las comillas