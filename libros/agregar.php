<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Libro</title>
</head>

<body>

    <h1>📚 Agregar Libro</h1>

    <form action="guardar.php" method="POST">

        <label>Título:</label><br>
        <input type="text" name="titulo" required>

        <br><br>

        <label>Autor:</label><br>
        <input type="text" name="autor" required>

        <br><br>

        <label>Editorial:</label><br>
        <input type="text" name="editorial">

        <br><br>

        <label>Año:</label><br>
        <input type="number" name="año" min="0">

        <br><br>

        <button type="submit">Agregar libro</button>

    </form>

    <br>

    <a href="listar.php">⬅️ Volver al listado</a>

</body>

</html>