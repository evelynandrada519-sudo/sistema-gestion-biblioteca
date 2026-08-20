<?php

require_once "../conexion.php";

$id = $_POST["id"];
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];

$sql = "UPDATE socios SET
        dni = '$dni',
        nombre = '$nombre',
        apellido = '$apellido',
        telefono = '$telefono'
        WHERE id = $id";

if ($conexion->query($sql) === TRUE) {

    header("Location: listar.php");
    exit;

} else {

    echo "Error al modificar el socio: " . $conexion->error;

}

?>