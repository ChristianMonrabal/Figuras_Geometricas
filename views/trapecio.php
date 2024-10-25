<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Trapecio</title>
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>
<body>
    <h1>Cálculo para Trapecio</h1>
    <form action="../php/calculos.php" method="POST">
        <label for="base_mayor">Base mayor:</label>
        <input type="number" name="base_mayor" id="base_mayor" step="any" value="<?php echo isset($_SESSION['base_mayor']) ? htmlspecialchars($_SESSION['base_mayor']) : ''; ?>" placeholder="Introduce la base mayor">

        <label for="base_menor">Base menor:</label>
        <input type="number" name="base_menor" id="base_menor" step="any" value="<?php echo isset($_SESSION['base_menor']) ? htmlspecialchars($_SESSION['base_menor']) : ''; ?>" placeholder="Introduce la base menor">

        <label for="altura">Altura:</label>
        <input type="number" name="altura" id="altura" step="any" value="<?php echo isset($_SESSION['altura']) ? htmlspecialchars($_SESSION['altura']) : ''; ?>" placeholder="Introduce la altura">

        <input type="hidden" name="figura" value="Trapecio">
        <button type="submit">Calcular</button>
    </form>
    <a href="../index.php">Volver a seleccionar otra figura</a>
</body>
</html>
