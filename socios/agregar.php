<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Socio</title>
</head>

<body>

    <h1>Agregar Socio</h1>

    <form action="guardar.php" method="POST">

        <label>DNI:</label><br>
        <input type="text" name="dni" required>

        <br><br>

        <label>Nombre:</label><br>
        <input type="text" name="nombre" required>

        <br><br>

        <label>Apellido:</label><br>
        <input type="text" name="apellido" required>

        <br><br>

        <label>Telefono:</label><br>
        <input type="text" name="telefono">

        <br><br>

        <button type="submit">Agregar socio</button>

    </form>

    <br>

    <a href="listar.php">Volver al listado</a>

</body>

</html>