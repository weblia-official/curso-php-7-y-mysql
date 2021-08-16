<?php

//Demostrar el tamaño de las letras en código ascii
//por ejemplo aeiou cada una de 8 bits lo cual es un byte

//Enseñarles que pasa por el método GET sin ponerle GET en el method

//Enseñarle los errores si la página no existe

$valor = $_GET;

//Enseñarles que no se puede imprimir ya que es un arreglo
echo $valor;

?>

<pre>
<?php var_dump($valor); ?>
</pre>

<?php

//Se puede imprimir con la variable a la que se asignó
echo $valor['nombre'];
//O directamente con GET
echo $_GET['apellido'];