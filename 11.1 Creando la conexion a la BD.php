<?php

$mysqli = new mysqli("localhost","root","","prueba");

//echo "<pre>";
//var_dump($mysqli);
//echo "</pre>";


if($mysqli->connect_errno){
     // Algo que no se debería de hacer en un sitio público, aunque este ejemplo lo mostrará
    // de todas formas, es imprimir información relacionada con errores de MySQL -- se podría registrar
    echo "Fallo al conectar, número de error: ".$mysqli->connect_errno."<br>Descripción del error: ".$mysqli->connect_error;

    echo "Algo salió mal, intentalo de nuevo más tarde";
}

//Conexiones mysqli
//https://www.php.net/manual/es/mysqli.quickstart.connections.php

//Connect errno
//https://www.php.net/manual/es/mysqli.connect-errno.php

//Connect error
//https://www.php.net/manual/es/mysqli.connect-error.php