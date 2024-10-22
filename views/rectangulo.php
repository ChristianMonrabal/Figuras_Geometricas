<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectángulo</title>
    <link rel="stylesheet" href="../css/forms.css">
    <script src="../js/validation_forms.js" defer></script>
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Cálculo para Rectángulo</h1>
        <form action="../php/calculos.php" method="POST">
            <label for="lado1_rectangulo">Base:</label>
            <input type="number" name="lado1_rectangulo" id="lado1_rectangulo" step="any" onblur="validateInput(this)" value="<?php echo isset($_SESSION['lado1_rectangulo']) ? htmlspecialchars($_SESSION['lado1_rectangulo']) : ''; ?>" placeholder="Introduce un lado del rectangulo">
            <span id="error-lado1_rectangulo" class="error-message"></span>

            <label for="lado2_rectangulo">Altura:</label>
            <input type="number" name="lado2_rectangulo" id="lado2_rectangulo" step="any" onblur="validateInput(this)" value="<?php echo isset($_SESSION['lado2_rectangulo']) ? htmlspecialchars($_SESSION['lado2_rectangulo']) : ''; ?>" placeholder="Introduce un lado del rectangulo">
            <span id="error-lado2_rectangulo" class="error-message"></span>

            <input type="hidden" name="figura" value="Rectangulo">
            <button type="submit">Calcular</button>
        </form>
        <a href="../index.php">Volver a seleccionar otra figura</a>
    </div>
</body>
</html>
