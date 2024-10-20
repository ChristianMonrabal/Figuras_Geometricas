<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triángulo</title>
    <link rel="stylesheet" href="../css/forms.css">
    <script src="../js/validation_forms.js" defer></script>
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>
<body>
    <h1>Cálculo para Triángulo</h1>
    <form action="../php/calculos.php" method="POST">
        <label for="lado1_triangulo">Lado 1:</label>
        <input type="number" name="lado1_triangulo" id="lado1_triangulo" step="any" onblur="validateInput(this)" value="<?php echo isset($_SESSION['lado1_triangulo']) ? htmlspecialchars($_SESSION['lado1_triangulo']) : ''; ?>">
        <span class="error-message" id="error-lado1_triangulo"></span>

        <label for="lado2_triangulo">Lado 2:</label>
        <input type="number" name="lado2_triangulo" id="lado2_triangulo" step="any" onblur="validateInput(this)" value="<?php echo isset($_SESSION['lado2_triangulo']) ? htmlspecialchars($_SESSION['lado2_triangulo']) : ''; ?>">
        <span class="error-message" id="error-lado2_triangulo"></span>

        <label for="lado3_triangulo">Lado 3:</label>
        <input type="number" name="lado3_triangulo" id="lado3_triangulo" step="any" onblur="validateInput(this)" value="<?php echo isset($_SESSION['lado3_triangulo']) ? htmlspecialchars($_SESSION['lado3_triangulo']) : ''; ?>">
        <span class="error-message" id="error-lado3_triangulo"></span>

        <input type="hidden" name="figura" value="Triangulo">
        <button type="submit">Calcular</button>
    </form>
    <a href="../index.php">Volver a seleccionar otra figura</a>
</body>
</html>
