<?php

require_once "../conexion.php";

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$año = $_POST["año"];

$sql = "INSERT INTO libros (titulo, autor, editorial, año)
        VALUES ('$titulo', '$autor', '$editorial', '$año')";

if ($conexion->query($sql) === TRUE) {

    header("Location: listar.php");
    exit;

} else {

    echo "Error al guardar el libro: " . $conexion->error;

}

?>