<?php
session_start();

require_once '../clases/Triangulo.php';
require_once '../clases/Rectangulo.php';
require_once '../clases/Cuadrado.php';
require_once '../clases/Circulo.php';

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
    } 

    elseif ($figura == 'Rectangulo') {
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
    } 

    elseif ($figura == 'Cuadrado') {
        $lado1 = $_POST['lado1_cuadrado'];

        $_SESSION['lado1_cuadrado'] = $lado1;

        if (!is_numeric($lado1)) {
            header('Location: ../views/cuadrado.php');
            exit;
        }

        $cuadrado = new Cuadrado($lado1);
        $resultados['area'] = $cuadrado->calcularArea();
        $resultados['perimetro'] = $cuadrado->calcularPerimetro();
    } 
    
    elseif ($figura == 'Circulo') {
        $radio = $_POST['radio_circulo'];

        if (!is_numeric($radio)) {
            header('Location: ../views/circulo.php');
            exit;
        }

        $_SESSION['radio_circulo'] = $radio;

        $circulo = new Circulo($radio);
        $resultados['area'] = $circulo->calcularArea();
        $resultados['perimetro'] = $circulo->calcularPerimetro();
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
