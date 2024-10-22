<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado</title>
    <link rel="stylesheet" href="../css/forms.css">
    <script src="../js/validation_forms.js" defer></script>
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>
<body>
    <h1>Cálculo para Cuadrado</h1>
    <form action="../php/calculos.php" method="POST">
        <label for="lado1_cuadrado">Lado:</label>
        <input type="number" name="lado1_cuadrado" id="lado1_cuadrado" step="any" onblur="validateInput(this)" value="<?php echo isset($_SESSION['lado1_cuadrado']) ? htmlspecialchars($_SESSION['lado1_cuadrado']) : ''; ?>" placeholder="Introduce el lado">
        <span id="error-lado1_cuadrado" class="error-message"></span>

        <input type="hidden" name="figura" value="Cuadrado">
        <button type="submit">Calcular</button>
    </form>
    <a href="../index.php">Volver a seleccionar otra figura</a>
</body>
</html>
