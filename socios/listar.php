<?php

require_once "../conexion.php";

$sql = "SELECT * FROM socios";
$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de Socios</title>
</head>

<body>

    <h1>Listado de Socios</h1>

    <a href="agregar.php">Agregar socio</a>

    <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>

        <?php while ($socio = $resultado->fetch_assoc()) { ?>

            <tr>

                <td><?php echo $socio["id"]; ?></td>

                <td><?php echo $socio["dni"]; ?></td>

                <td><?php echo $socio["nombre"]; ?></td>

                <td><?php echo $socio["apellido"]; ?></td>

                <td><?php echo $socio["telefono"]; ?></td>

                <td>

                    <a href="modificar.php?id=<?php echo $socio["id"]; ?>">
                        Modificar
                    </a>

                    |

                    <a href="eliminar.php?id=<?php echo $socio["id"]; ?>">
                        Eliminar
                    </a>

                </td>

            </tr>

        <?php } ?>

    </table>
<a href="../index.php">Volver</a>
</body>

</html>