<?php


//Normal Unidimensional
$autos = array("Mustang","Camaro","Ferrari","Porsche");


foreach($autos as $carro){
    echo $carro;
    echo "<br>";
}

echo "<br>";
echo "<br>";

//Asociativo
$ferrari = array('color' => "rojo","tipo" => 'muscle car',"km" => 1000);

foreach($ferrari as $propiedad => $valor){
    echo "Propiedad: ".$propiedad." Tipo: ".$valor;
    echo "<br>";
}

//Multidimensional asociativo

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

foreach($carros as $carro => $propiedades){
    echo "<h3> $carro </h3>";
    foreach ($propiedades as $propiedad => $valor){
        echo "Propiedad: ".$propiedad." Valor: ".$valor;
        echo "<br>";
    }
}

