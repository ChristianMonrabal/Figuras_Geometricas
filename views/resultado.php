<?php
session_start();

if (!isset($_SESSION['resultados']) || !isset($_SESSION['figura'])) {
    echo "<h1>Error</h1>";
    echo "<p>No se han encontrado resultados. Asegúrate de calcular antes de ver los resultados.</p>";
    exit;
}

$resultados = $_SESSION['resultados'];
$figura = $_SESSION['figura'];

if ($figura !== 'Rectangulo') {
    echo "<h1>Error</h1>";
    echo "<p>Los resultados son solo para la figura Rectángulo.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="../css/resultado.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <a href="javascript:void(0);" class="back-button" onclick="history.back();">
            <i class="fas fa-arrow-left"></i>
        </a>

        <h1>Resultados para <?php echo htmlspecialchars($figura); ?></h1>
        
        <div class="results-container">
            <p>Lado: <?php echo htmlspecialchars($_SESSION['lado1_rectangulo']); ?></p>
            <p>Altura: <?php echo htmlspecialchars($_SESSION['lado2_rectangulo']); ?></p>
            <p>Área: <?php echo htmlspecialchars($resultados['area']); ?></p>
            <p>Perímetro: <?php echo htmlspecialchars($resultados['perimetro']); ?></p>
        </div>
    </div>
    
    <a href="../index.php">Volver a seleccionar otra figura</a>
</body>
</html>
