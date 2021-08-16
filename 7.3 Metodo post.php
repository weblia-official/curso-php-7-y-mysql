<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviando datos por POST</title>
</head>
<body>
    
    <form action="procesar.php" method="POST">
        <label for="nombre">Teclea tu nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellido">Teclea tu apellido: </label>
        <input type="text" name="apellido" id="apellido">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>