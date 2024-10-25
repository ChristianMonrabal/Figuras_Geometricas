<?php
session_start();

if (!isset($_SESSION['resultados']) || !isset($_SESSION['figura'])) {
    echo "<h1>Error</h1>";
    echo "<p>No se han encontrado resultados. Asegúrate de calcular antes de ver los resultados.</p>";
    echo "<a href='../index.php'>Seleccionar otra figura</a>";
    exit;
}

$resultados = $_SESSION['resultados'];
$figura = $_SESSION['figura'];
$tipoFigura = $_SESSION['tipoFigura'];
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
        <?php
            switch ($figura) {
                case 'Triangulo':
                    echo '<p>Lado 1: ' . htmlspecialchars($_SESSION['lado1_triangulo']) . '</p>';
                    echo '<p>Lado 2: ' . htmlspecialchars($_SESSION['lado2_triangulo']) . '</p>';
                    echo '<p>Lado 3: ' . htmlspecialchars($_SESSION['lado3_triangulo']) . '</p>';
                    break;

                case 'Rectangulo':
                    echo '<p>Base: ' . htmlspecialchars($_SESSION['lado1_rectangulo']) . '</p>';
                    echo '<p>Altura: ' . htmlspecialchars($_SESSION['lado2_rectangulo']) . '</p>';
                    break;

                case 'Cuadrado':
                    echo '<p>Lado: ' . htmlspecialchars($_SESSION['lado1_cuadrado']) . '</p>';
                    break;

                case 'Circulo':
                    echo '<p>Radio: ' . htmlspecialchars($_SESSION['radio_circulo']) . '</p>';
                    break;

                case 'Trapecio':
                    echo '<p>Base mayor: ' . ($_SESSION['base_mayor']) . '</p>';
                    echo '<p>Base menor: ' . ($_SESSION['base_menor']) . '</p>';
                    echo '<p>Altura: ' . ($_SESSION['altura']) . '</p>';
                    break;
            }
        ?>
            <p>Área: <?php echo htmlspecialchars($resultados['area']); ?></p>
            <p>Perímetro: <?php echo htmlspecialchars($resultados['perimetro']); ?></p>
        </div>
    </div>
    
    <a href="../index.php">Volver a seleccionar otra figura</a>
    <br>
</body>
</html>
