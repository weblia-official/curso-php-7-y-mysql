<?php


/* El bucle for es el más complejos de los bucles, pero no por eso debe de ser dificil de usar */


for( $i=0; $i <= 10; $i++ ){
    echo "Estoy en el número ".$i;
    echo "<br>";
}

echo "<br>";

//También se pueden hacer conteos negativos
for( $i=10;$i >= 0; $i-- ){
    echo "Estoy en el número ".$i;
    echo "<br>";
}

//O de dos en dos, tres en tres, no hay límite, intenta todo lo que te imagines
echo "<br>";

for( $i=0; $i <= 10; $i+= 2 ){
    echo "Estoy en el número ".$i;
    echo "<br>";
}

