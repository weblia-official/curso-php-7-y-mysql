<?php

//Mostrar el tamaño de la pagina
//Por ejemplo con letras la letra aeiou cada una en código ascii es de 8 bits, por eso tenemos 5 bytes

$datos = $_POST;

//echo $datos;    

?>

<pre>
<?php var_dump($datos); ?>
</pre>

<?php

//Podemos llamarlo desde la variable a la cual lo asignamos
echo $datos['nombre'];
//O desde POST
echo $_POST['apellido'];