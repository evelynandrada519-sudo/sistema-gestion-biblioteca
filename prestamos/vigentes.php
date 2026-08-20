<?php

require_once "../conexion.php";

$sql = "SELECT

            prestamos.id,
            libros.titulo,
            socios.nombre,
            socios.apellido,
            prestamos.fecha_prestamo

        FROM prestamos

        INNER JOIN libros
            ON prestamos.libro_id = libros.id

        INNER JOIN socios
            ON prestamos.socio_id = socios.id

        WHERE prestamos.fecha_devolucion IS NULL

        ORDER BY prestamos.id DESC";

$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Prestamos vigentes</title>

</head>

<body>

    <h1>Prestamos vigentes</h1>

    <a href="listar.php">Ver todos los prestamos</a>

    <br><br>

    <table border="1">

        <tr>

            <th>ID</th>

            <th>Libro</th>

            <th>Socio</th>

            <th>Fecha de prestamo</th>

            <th>Estado</th>

            <th>Accion</th>

        </tr>

        <?php while ($prestamo = $resultado->fetch_assoc()) { ?>

            <tr>

                <td>
                    <?php echo $prestamo["id"]; ?>
                </td>

                <td>
                    <?php echo $prestamo["titulo"]; ?>
                </td>

                <td>
                    <?php echo $prestamo["apellido"] . ", " . $prestamo["nombre"]; ?>
                </td>

                <td>
                    <?php echo $prestamo["fecha_prestamo"]; ?>
                </td>

                <td>
                    Vigente
                </td>

                <td>

                    <a href="devolver.php?id=<?php echo $prestamo["id"]; ?>">
                        Registrar devolucion
                    </a>

                </td>

            </tr>

        <?php } ?>

    </table>

    <br>

    <a href="../index.php">Volver al inicio</a>

</body>

</html>