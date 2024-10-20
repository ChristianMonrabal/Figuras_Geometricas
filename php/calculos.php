<?php
session_start();

require_once '../clases/Rectangulo.php';

$resultados = ['area' => null, 'perimetro' => null];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['figura'])) {
    $figura = $_POST['figura'];

    if ($figura == 'Rectangulo') {
        $lado1 = $_POST['lado1_rectangulo'];
        $lado2 = $_POST['lado2_rectangulo'];

        if (!is_numeric($lado1) || !is_numeric($lado2)) {
            header('Location: ../views/rectangulo.php');
            exit;
        }

        $_SESSION['lado1_rectangulo'] = $lado1;
        $_SESSION['lado2_rectangulo'] = $lado2;

        $rectangulo = new Rectangulo($lado1, $lado2);
        $resultados['area'] = $rectangulo->calcularArea();
        $resultados['perimetro'] = $rectangulo->calcularPerimetro();
    } else {
        echo "<h1>Error</h1>";
        echo "<p>La figura seleccionada no es un rectángulo. Asegúrate de utilizar el formulario para rectángulos.</p>";
        exit;
    }

    $_SESSION['resultados'] = $resultados;
    $_SESSION['figura'] = $figura;

    header('Location: ../views/resultado.php');
    exit;

} else {
    echo "<h1>Error</h1>";
    echo "<p>Los métodos no se han enviado de la manera adecuada. Asegúrate de utilizar el formulario correctamente.</p>";
    exit;
}
?>
