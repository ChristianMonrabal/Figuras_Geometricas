<?php
session_start();

require_once '../clases/Triangulo.php';

$resultados = ['area' => null, 'perimetro' => null];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['figura'])) {
    $figura = $_POST['figura'];

    if ($figura == 'Triangulo') {
        $lado1 = $_POST['lado1_triangulo'];
        $lado2 = $_POST['lado2_triangulo'];
        $lado3 = $_POST['lado3_triangulo'];

        if (!is_numeric($lado1) || !is_numeric($lado2) || !is_numeric($lado3)) {
            header('Location: ../views/triangulo.php'); 
            exit;
        }

        $_SESSION['lado1_triangulo'] = $lado1;
        $_SESSION['lado2_triangulo'] = $lado2;
        $_SESSION['lado3_triangulo'] = $lado3;

        $triangulo = new Triangulo($lado1, $lado2, $lado3);
        $resultados['area'] = $triangulo->calcularArea();
        $resultados['perimetro'] = $triangulo->calcularPerimetro();

        $_SESSION['resultados'] = $resultados;
        $_SESSION['figura'] = $figura;

        header('Location: ../views/resultado.php');
        exit;

    } else {
        echo "<h1>Error</h1>";
        echo "<p>Este script solo procesa la figura Triángulo.</p>";
        exit;
    }

} else {
    echo "<h1>Error</h1>";
    echo "<p>Los métodos no se han enviado de la manera adecuada. Asegúrate de utilizar el formulario correctamente.</p>";
    exit;
}
?>
