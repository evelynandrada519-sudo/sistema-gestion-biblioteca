<?php

require_once "../conexion.php";

$id = $_GET["id"];

$fecha_devolucion = date("Y-m-d");

$sql = "UPDATE prestamos
        SET fecha_devolucion = ?
        WHERE id = ?";

$stmt = $conexion->prepare($sql);

$stmt->bind_param(
    "si",
    $fecha_devolucion,
    $id
);

if ($stmt->execute()) {

    header("Location: listar.php");
    exit;

} else {

    echo "Error al registrar la devolucion: " . $conexion->error;

}

?>