<?php

require_once "../conexion.php";

$libro_id = $_POST["libro_id"];
$socio_id = $_POST["socio_id"];
$fecha_prestamo = $_POST["fecha_prestamo"];

$fecha_devolucion = !empty($_POST["fecha_devolucion"])
    ? $_POST["fecha_devolucion"]
    : NULL;

$sql = "INSERT INTO prestamos
        (libro_id, socio_id, fecha_prestamo, fecha_devolucion)
        VALUES (?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

$stmt->bind_param(
    "iiss",
    $libro_id,
    $socio_id,
    $fecha_prestamo,
    $fecha_devolucion
);

if ($stmt->execute()) {

    header("Location: listar.php");
    exit;

} else {

    echo "Error al guardar el prestamo: " . $conexion->error;

}

?>