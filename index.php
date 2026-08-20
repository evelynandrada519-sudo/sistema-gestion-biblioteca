<?php

require_once "conexion.php";

$sql_libros = "SELECT COUNT(*) AS total FROM libros";
$resultado_libros = $conexion->query($sql_libros);
$total_libros = $resultado_libros->fetch_assoc()["total"];

$sql_socios = "SELECT COUNT(*) AS total FROM socios";
$resultado_socios = $conexion->query($sql_socios);
$total_socios = $resultado_socios->fetch_assoc()["total"];

$sql_prestamos = "SELECT COUNT(*) AS total FROM prestamos";
$resultado_prestamos = $conexion->query($sql_prestamos);
$total_prestamos = $resultado_prestamos->fetch_assoc()["total"];

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Biblioteca - Inicio</title>


</head>

<body>

    <aside class="sidebar">

        <div class="logo">

            <h2>📚 Biblioteca</h2>

            <p>Sistema de Gestion</p>

        </div>

        <ul class="menu">

            <li>
                <a href="index.php">🏠 Inicio</a>
            </li>

            <li>
                <a href="libros/listar.php">📚 Libros</a>
            </li>

            <li>
                <a href="socios/listar.php">👤 Socios</a>
            </li>

            <li>
                <a href="prestamos/listar.php">📖 Prestamos</a>
            </li>

        </ul>

    </aside>


    <main class="main">

        <div class="header">

            <div>

                <h1>Bienvenido a la Biblioteca</h1>

                <p>Panel principal del sistema de gestion</p>

            </div>

        </div>


        <div class="cards">

            <div class="card">

                <h3>Total de libros</h3>

                <div class="numero">
                    📚 <?php echo $total_libros; ?>
                </div>

            </div>


            <div class="card">

                <h3>Total de socios</h3>

                <div class="numero">
                    👤 <?php echo $total_socios; ?>
                </div>

            </div>


            <div class="card">

                <h3>Prestamos vigentes</h3>

                <div class="numero">
                    📖 <?php echo $total_prestamos; ?>
                </div>

            </div>

        </div>

    </main>

</body>

</html>