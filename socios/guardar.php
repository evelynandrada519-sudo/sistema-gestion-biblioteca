<?php

require_once "../conexion.php";

$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];

$sql = "INSERT INTO socios (dni, nombre, apellido, telefono)
        VALUES ('$dni', '$nombre', '$apellido', '$telefono')";

if ($conexion->query($sql) === TRUE) {

    header("Location: listar.php");
    exit;

} else {

    echo "Error al guardar el socio: " . $conexion->error;

}

?>