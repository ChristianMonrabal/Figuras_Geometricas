<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras Geométricas</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
</head>
<body>
    <h1>Seleccione una figura geométrica</h1>
    <div class="icon-container">
        <a href="views/triangulo.php" class="icon">
        <i class="fas fa-play rotate"></i>
        <span>Triángulo</span>
        </a>
        <a href="views/rectangulo.php" class="icon">
        <i class="fas fa-square"></i>
        <span>Rectángulo</span>
        </a>
        <a href="views/cuadrado.php" class="icon">
            <i class="fas fa-cube"></i>
            <span>Cuadrado</span>
        </a>
        <a href="views/circulo.php" class="icon">
            <i class="fas fa-circle"></i>
            <span>Círculo</span>
        </a>
        <a href="views/trapecio.php" class="icon">
            <i class="fas fa-th-large"></i>
            <span>Trapecio</span>
        </a>
    </div>
</body>
</html>
