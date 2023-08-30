<?php
    $url_base = "http://localhost:8112/";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="shortcut icon" href="paginas/imagenes/favicon.jpg" type="image/x-icon">
    <title>Facturacion</title>
</head>
<body>
    <header>

    </header>
    <nav>
        <ul class="navbar bg-primary nav text-center bg-info-subtle" data-bs-theme="dark">
            <li>
                <a href="<?php echo $url_base?>" class="text-decoration-none fs-4">Inicio</a>
            </li>
            <li>
                <a href="<?php echo $url_base?>paginas/fechas/insertarFechas.php" class="text-decoration-none fs-4">Salidas</a>
            </li>
            <li>
                <a href="<?php echo $url_base?>paginas/clientes/insertarClientes.php" class="text-decoration-none fs-4">Socios</a>
            </li>
            <li>
                <a href="<?php echo $url_base?>paginas/barcos/insertarBarcos.php" class="text-decoration-none fs-4">Barcos</a>
            </li>
            <li>
                <a href="<?php echo $url_base?>paginas/destinos/insertarDestinos.php" class="text-decoration-none fs-4">Agregar destinos</a>
            </li>
        </ul>
    </nav>
    <main class="container">