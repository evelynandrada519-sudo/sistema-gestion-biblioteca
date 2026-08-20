<?php

require_once "../conexion.php";

$sql_libros = "SELECT id, titulo FROM libros ORDER BY titulo";
$resultado_libros = $conexion->query($sql_libros);

$sql_socios = "SELECT id, nombre, apellido FROM socios ORDER BY apellido, nombre";
$resultado_socios = $conexion->query($sql_socios);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Prestamo</title>
</head>

<body>

    <h1>Agregar Prestamo</h1>

    <form action="guardar.php" method="POST">

        <label>Libro:</label><br>

        <select name="libro_id" required>

            <option value="">Seleccione un libro</option>

            <?php while ($libro = $resultado_libros->fetch_assoc()) { ?>

                <option value="<?php echo $libro["id"]; ?>">
                    <?php echo $libro["titulo"]; ?>
                </option>

            <?php } ?>

        </select>

        <br><br>

        <label>Socio:</label><br>

        <select name="socio_id" required>

            <option value="">Seleccione un socio</option>

            <?php while ($socio = $resultado_socios->fetch_assoc()) { ?>

                <option value="<?php echo $socio["id"]; ?>">
                    <?php echo $socio["apellido"] . ", " . $socio["nombre"]; ?>
                </option>

            <?php } ?>

        </select>

        <br><br>

        <label>Fecha de prestamo:</label><br>

        <input
            type="date"
            name="fecha_prestamo"
            value="<?php echo date('Y-m-d'); ?>"
            required
        >

        <br><br>

        <label>Fecha de devolucion:</label><br>

        <input
            type="date"
            name="fecha_devolucion"
        >

        <br><br>

        <button type="submit">Registrar prestamo</button>

    </form>

    <br>

    <a href="listar.php">Volver al listado</a>

</body>

</html>