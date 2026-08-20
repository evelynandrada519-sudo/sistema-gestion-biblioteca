<?php

require_once "../conexion.php";

$sql = "SELECT
            prestamos.id,
            libros.titulo,
            socios.nombre,
            socios.apellido,
            prestamos.fecha_prestamo,
            prestamos.fecha_devolucion
        FROM prestamos
        INNER JOIN libros
            ON prestamos.libro_id = libros.id
        INNER JOIN socios
            ON prestamos.socio_id = socios.id
        ORDER BY prestamos.id DESC";

$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de Prestamos</title>
</head>

<body>

    <h1>Listado de Prestamos</h1>

    <a href="agregar.php">Agregar prestamo</a>
    <a href="vigentes.php">Prestamos vigentes</a>

    <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Libro</th>
            <th>Socio</th>
            <th>Fecha de prestamo</th>
            <th>Fecha de devolucion</th>
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
                    <?php
                    echo $prestamo["apellido"] . ", " . $prestamo["nombre"];
                    ?>
                </td>

                <td>
                    <?php echo $prestamo["fecha_prestamo"]; ?>
                </td>

                <td>

                    <?php

                    if ($prestamo["fecha_devolucion"] == NULL) {

                        echo "Pendiente";

                    } else {

                        echo $prestamo["fecha_devolucion"];

                    }

                    ?>

                </td>

                <td>

                    <?php

                    if ($prestamo["fecha_devolucion"] == NULL) {

                        echo "Vigente";

                    } else {

                        echo "Devuelto";

                    }

                    ?>

                </td>

                <td>

                    <?php if ($prestamo["fecha_devolucion"] == NULL) { ?>

                        <a href="devolver.php?id=<?php echo $prestamo["id"]; ?>">
                            Registrar devolucion
                        </a>

                    <?php } else { ?>

                        No disponible

                    <?php } ?>

                </td>

            </tr>

        <?php } ?>

    </table>

</body>
    <a href="../index.php">Volver</a>
</html>