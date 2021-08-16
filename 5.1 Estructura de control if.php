<?php

//La estructura if nos va a servir para evaluar condiciones.
//Es parecido al operador ternario, pero generalmente usamos el if.


//Imaginemos que queremos hacer una caja fuerte
echo "<h3> Caja Fuerte </h3>";
$contrasena = 5398;


if(3456 == $contrasena){//Esto nos devolvería false por que 3456 no es igual a 5398 que es la contraseña
    //Si la contraseña es correcta
    echo "La caja fuerte se abrirá.";
}else{
    //De lo contrario, si la contraseña es incorrecta, la caja fuerte no se abrirá
    echo "Contraseña incorrecta";
}

echo "<br>";
echo "<h3> Login </h3>";

//Ahora queremos hacer un login sencillo

$usuario = "carlos";
$password = "car76";
$telefono = 5523;


if("arturo" == $usuario){
    //Si los usuarios son iguales me devolverá TRUE y entrará aquí.
    echo "El usuario es correcto";
    if("patito23" == $password){
        echo "El inicio de sesión fue correcto";
    }else{
        echo "Contraseña incorrecta";
    }
}else if(5524 == $telefono){
    //Si el teléfono es igual al teléfono registrado, entonces devolverá true, y entrará aquí.
    echo "El teléfono es correcto";
    if("patito23" == $password){
        echo "El inicio de sesión fue correcto";
    }else{
        echo "Contraseña incorrecta";
    }
}else{
    echo "Ese usuario no existe";
}