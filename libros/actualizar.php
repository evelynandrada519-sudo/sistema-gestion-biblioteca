<?php

require_once "../conexion.php";

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$año = $_POST["año"];

$sql = "UPDATE libros SET
        titulo = '$titulo',
        autor = '$autor',
        editorial = '$editorial',
        año = '$año'
        WHERE id = $id";

if ($conexion->query($sql) === TRUE) {

    header("Location: listar.php");
    exit;

} else {

    echo "Error al modificar el libro: " . $conexion->error;

}

?>