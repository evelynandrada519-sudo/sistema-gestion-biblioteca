<?php

require_once "../conexion.php";

$id = $_GET["id"];

$sql = "SELECT * FROM libros WHERE id = $id";
$resultado = $conexion->query($sql);

$libro = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar Libro</title>
</head>

<body>

    <h1>✏️ Modificar Libro</h1>

    <form action="actualizar.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $libro["id"]; ?>">

        <label>Título:</label><br>
        <input 
            type="text" 
            name="titulo" 
            value="<?php echo $libro["titulo"]; ?>" 
            required
        >

        <br><br>

        <label>Autor:</label><br>
        <input 
            type="text" 
            name="autor" 
            value="<?php echo $libro["autor"]; ?>" 
            required
        >

        <br><br>

        <label>Editorial:</label><br>
        <input 
            type="text" 
            name="editorial" 
            value="<?php echo $libro["editorial"]; ?>"
        >

        <br><br>

        <label>Año:</label><br>
        <input 
            type="number" 
            name="año" 
            value="<?php echo $libro["año"]; ?>"
        >

        <br><br>

        <button type="submit">Guardar cambios</button>

    </form>

    <br>

    <a href="listar.php">Volver</a>

</body>

</html>