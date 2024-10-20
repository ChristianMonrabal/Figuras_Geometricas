<?php
require_once 'FiguraGeometrica.php';

class Circulo extends FiguraGeometrica {
    private $radio;

    public function __construct($radio) {
        parent::__construct('Círculo', $radio);
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->radio;
    }

    public function __toString() {
        return "Círculo con radio: $this->radio";
    }
}
?>
