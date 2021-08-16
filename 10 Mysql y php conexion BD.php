<?php

$mysqli = new mysqli("localhost","root","","prueba");

echo "<pre>";
var_dump($mysqli);
echo "</pre>";

if($mysqli->connect_errno){
    echo "Fallo al conectar, número de error: ".$mysqli->connect_errno."<br>Descripción del error: ".$mysqli->connect_error;
}

//Conexiones mysqli
//https://www.php.net/manual/es/mysqli.quickstart.connections.php

//Connect errno
//https://www.php.net/manual/es/mysqli.connect-errno.php

//Connect error
//https://www.php.net/manual/es/mysqli.connect-error.php