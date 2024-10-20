<?php
session_start();

require_once '../clases/Cuadrado.php';

$resultados = ['area' => null, 'perimetro' => null];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['figura'])) {
    $figura = $_POST['figura'];

    if ($figura == 'Cuadrado') {
        $lado1 = $_POST['lado1_cuadrado'];

        $_SESSION['lado1_cuadrado'] = $lado1;

        if (!is_numeric($lado1)) {
            header('Location: ../views/cuadrado.php');
            exit;
        }

        $cuadrado = new Cuadrado($lado1);
        $resultados['area'] = $cuadrado->calcularArea();
        $resultados['perimetro'] = $cuadrado->calcularPerimetro();

        $_SESSION['resultados'] = $resultados;
        $_SESSION['figura'] = $figura;

        header('Location: ../views/resultado.php');
        exit;

    } else {
        echo "<h1>Error</h1>";
        echo "<p>La figura seleccionada no es válida. Asegúrate de utilizar el formulario para cuadrado.</p>";
        exit;
    }
} else {
    echo "<h1>Error</h1>";
    echo "<p>Los métodos no se han enviado de la manera adecuada. Asegúrate de utilizar el formulario correctamente.</p>";
    exit;
}
?>
