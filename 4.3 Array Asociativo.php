<?php

//Los arreglos asociativos asocian un nombre con algún valor


$auto = array(
    'color' => 'gris',
    'marca' => 'toyota',
    'km'    => 16000,
    'vendedor' => 'automotores'
);

echo $auto['marca'];

echo "<br>";


//Multidimensionales
$carros = array(

    'Mustang' => array(
        'color' => 'rojo',
        'km'    => 62000,
        'vendedor' => 'SuperMotors' 
    ),
    'Sentra'   => array(
        'color' => 'blanco',
        'km'    => 23000,
        'vendedor' => 'Sentra' 
    )

);


echo $carros['Mustang']['color'];

?>

<pre>
<?php
var_dump($carros['Mustang']);
?>
</pre>