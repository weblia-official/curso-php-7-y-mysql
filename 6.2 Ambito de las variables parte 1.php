<?php

//Esta es una variable global
$a = 5;


function sumaUno($varLocal){
    $varLocal += 1;
    //Esta es una variable local
}

//Si nosotros hacemos lo siguiente nos marcaría un error:

/*
function imprime(){
    echo $a;
}

imprime();
*/
//Esto es por que la variable $a no existe dentro de el ambito local de la función imprime
//Para que nosotros podamos imprimir la variable $a global necesitamos declararla global dentro de la función

function imprimir(){
    global $a;
    echo $a;
}

imprimir();
//Podemos utilizar tantas variables como queramos



//También podemos utilizar el array GLOBALS

?>

<pre>
<?php
var_dump($GLOBALS);
?>
</pre>

<?php

function imp(){
    echo $GLOBALS['a'];
}

imp();