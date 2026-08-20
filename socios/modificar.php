<?php

require_once "../conexion.php";

$id = $_GET["id"];

$sql = "SELECT * FROM socios WHERE id = $id";
$resultado = $conexion->query($sql);

$socio = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar Socio</title>
</head>

<body>

    <h1>Modificar Socio</h1>

    <form action="actualizar.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $socio["id"]; ?>">

        <label>DNI:</label><br>
        <input
            type="text"
            name="dni"
            value="<?php echo $socio["dni"]; ?>"
            required
        >

        <br><br>

        <label>Nombre:</label><br>
        <input
            type="text"
            name="nombre"
            value="<?php echo $socio["nombre"]; ?>"
            required
        >

        <br><br>

        <label>Apellido:</label><br>
        <input
            type="text"
            name="apellido"
            value="<?php echo $socio["apellido"]; ?>"
            required
        >

        <br><br>

        <label>Telefono:</label><br>
        <input
            type="text"
            name="telefono"
            value="<?php echo $socio["telefono"]; ?>"
        >

        <br><br>

        <button type="submit">Guardar cambios</button>

    </form>

    <br>

    <a href="listar.php">Volver al listado</a>

</body>

</html>