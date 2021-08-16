
<!-- Integrando PHP en HTML -->

<h1> <?php echo "Hola, estamos integrando PHP en HTML"; ?> </h1>

<?php

//Integrando HTML en PHP 

echo "<h3>Hola, estoy integrando HTML en PHP</h3>";

//Ahora un poco más complicado

echo "<h2 class='rojo'>Estoy integrando HTML en PHP con distintas comillas</h2>";

$variable = TRUE;

if($variable == 1){
    echo "Hola";
}
?>

<style>
.rojo{
    color:red;
}

</style>

