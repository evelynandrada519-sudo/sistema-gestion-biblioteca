<?php

require_once "../conexion.php";

$id = $_GET["id"];

$sql = "DELETE FROM libros WHERE id = $id";

if ($conexion->query($sql) === TRUE) {

    header("Location: listar.php");
    exit;

} else {

    echo "Error al eliminar el libro: " . $conexion->error;

}

?>