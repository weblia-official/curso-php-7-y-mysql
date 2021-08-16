<?php

//Nos van a servir para agregar archivos de PHP externos

//Sus estructuras son las siguientes
include('archivo.php');

echo "Sigo ejecutándome <br>";



require('archivo.php');

echo "Ya no sigo ejecutándome <br>";

//La diferencia es que si include no encuentra el archivo no hay problema, solo tendremos un warning, pero el código continúa ejecutandose. 
//Pero si require no encuentra el archivo, se corta el flujo de ejecución y ya no continúa el código.


//Si nosotros tenemos alguna variable, o función o cualquier otra cosa en el otro archivo la podemos utilizar.

echo $variable;
?>