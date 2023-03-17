<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="ejecutar.php" method="post">
        <label for="">Nombre:</label>
        <input type="text" name="nombre">
        <label for="">Edad:</label>
        <input type="number" name="edad">
        <label for="">Salario:</label>
        <input type="number" name="salario">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>