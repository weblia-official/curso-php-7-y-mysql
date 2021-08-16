<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviando datos por GET</title>
</head>
<body>
    <form action="procesando.php" method="GET">
        <label for="nombre">Teclea tu nombre: </label>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="apellido">Teclea tu apellido: </label>
        <input type="text" name="apellido" id="apellido"><br>
        <label for="pais">Seleccione su país</label>
        <select name="pais" id="pais">
        <option value="mx">México</option>
        <option value="es">España</option>
        <option value="eu">Estados Unidos</option>
        <option value="co">Colombia</option>
        </select><br>
        <label for="">Intereses</label>
        <label for="">Autos</label>
        <input type="checkbox" name="interes[]" value="autos">
        <label for="">Ciencia</label>
        <input type="checkbox" name="interes[]" value="ciencia">
        <label for="">Tecnología</label>
        <input type="checkbox" name="interes[]" value="tecnologia"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>