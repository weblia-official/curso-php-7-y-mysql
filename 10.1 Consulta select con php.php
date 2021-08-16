<?php
require('../connection.php');
//Nos salimos de la carpeta

//En una variable vamos a almacenar el QUERY, que es la consulta que vamos a hacer a la BD
$sql = "SELECT * FROM usuarios";

//Después ejecutamos el query, y esa ejecución la guardamos en una variable.

//Como pueden ver estoy utilizando mi variable de conexión, que se llama $mysqli, y con este símbolo -> estoy llamando a una función(método)
//que se llama query, que se encarga de ejecutar consultas
$resultado = $mysqli->query($sql);

//Vamos a ver que tiene el resultado
echo "<pre>";
var_dump($resultado);
echo "</pre>";
//Algo importante es el num_rows, ya que nos va a mostrar el número de filas que nos devolvió nuestra consulta.
//Posteriormente podemos validar con el num_rows, ya que si la consulta se ejecutó bien, nos va a devolver TRUE aunque no tenga ninguna fila

/*La variable resultado ahora es un objeto que contiene todas las filas que le pedimos a la BD, necesitamos que nos vaya 
dando fila por fila, algo parecido al foreach, así que almacenamos toda una fila de la base de datos en una variable,
la cual se convertirá en un arreglo */
if($resultado->num_rows > 0){
    //Debemos checar con num_rows que haya filas.
while($fila = $resultado->fetch_assoc()){
    //fetch_assoc nos va a regresar una fila como array asociativo, vamos a ver como quedaría nuestra variable fila
    echo "<pre>";
    var_dump($fila);
    echo "</pre>";

    //Ahora, para poder imprimir los valores debemos llamar a nuestro arreglo fila en el índice que necesitamos
    echo $fila['usuario'];
    echo "<br>";
    echo $fila['nombre'];
    echo "<br>";
    echo $fila['password'];
    echo "<br>";
    echo $fila['id'];

    //El while irá recorriendo cada fila, para que nos muestre todos los resultados obtenidos de la base de datos, hasta que se acaben
}
}else{
    //Si el num_rows es igual a 0 significa que no hay registros
    echo "No hay usuarios";
}

//Enseñarles a validar con num_rows
?>