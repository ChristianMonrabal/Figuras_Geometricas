<?php
session_start();

require_once '../clases/Circulo.php';

$resultados = ['area' => null, 'perimetro' => null];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['figura']) && $_POST['figura'] === 'Circulo') {
    $radio = $_POST['radio_circulo'];

    if (!is_numeric($radio)) {
        header('Location: ../views/circulo.php');
        exit;
    }

    $_SESSION['radio_circulo'] = $radio;

    $circulo = new Circulo($radio);
    $resultados['area'] = $circulo->calcularArea();
    $resultados['perimetro'] = $circulo->calcularPerimetro();

    $_SESSION['resultados'] = $resultados;
    $_SESSION['figura'] = 'Circulo';

    header('Location: ../views/resultado.php');
    exit;

} else {
    echo "<h1>Error</h1>";
    echo "<p>Los métodos no se han enviado de la manera adecuada. Asegúrate de utilizar el formulario correctamente.</p>";
    exit;
}
?>
