<?php



$autos = array("Mustang","Camaro","Ferrari","Porsche");


                for( $i = 0; $i <= 3; $i++){
                    echo $autos[$i];
                    echo "<br>";
                }

//Si no conocemos el tamaño del arreglo podemos utilizar la función count

echo "<br>";
echo count($autos);
echo "<br>";
echo "<br>";
                for( $i = 0; $i < count($autos); $i++){
                    echo $autos[$i];
                    echo "<br>";
                }