<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Círculo</title>
    <link rel="stylesheet" href="../css/forms.css">
    <script src="../js/validation_forms.js" defer></script>
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Cálculo para Círculo</h1>
        <form action="../php/calculos.php" method="POST">
            <label for="radio_circulo">Radio:</label>
            <input type="number" name="radio_circulo" id="radio_circulo" step="any" onblur="validateInput(this)" value="<?php echo isset($_SESSION['radio_circulo']) ? htmlspecialchars($_SESSION['radio_circulo']) : ''; ?>" placeholder="Introduce el radio">
            <span id="error-radio_circulo" class="error-message"></span>
            
            <input type="hidden" name="figura" value="Circulo">
            <button type="submit">Calcular</button>
        </form>
        <a href="../index.php">Volver a seleccionar otra figura</a>
    </div>
</body>
</html>
