<?php



//Recordemos que las variables de las funciones solo viven dentro de ellas

//Existen dos formas de pasar parámetros, por valor y por referencia
//La que hemos usado es la de valor, ya que solamente estamos pasando un valor

function sumarTres($numero){
    return $numero += 3;
}

$valor = 5;

$resultado = sumarTres($valor);

echo "Valor = $valor <br>";
echo "Resultado = $resultado <br>";


//Ahora usaremos la de referencia, la cual, modificará el valor de la variable que estamos pasando.

function sumarCuatro(&$numero2){
    return $numero2+= 4;
}

$referencia = 6;

$resultado2 = sumarCuatro($referencia);

echo "Referencia = $referencia <br>";

echo "Resultado = $resultado2 <br>";

//Pasár parámetros por referencia va a modificar el valor que estamos enviando.
//En este caso va a modificar el valor de la variable $referencia que es la que estamos pasando.