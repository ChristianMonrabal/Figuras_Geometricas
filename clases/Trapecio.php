<?php
session_start();
class Trapecio extends FiguraGeometrica {
    private $lado2;
    private $altura;

    public function __construct($lado1, $lado2, $altura) {
        parent::__construct("Trapecio", $lado1);
        $this->lado2 = $lado2;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return (($this->lado1 + $this->lado2) / 2) * $this->altura;
    }

    public function calcularPerimetro() {
        return ($this->lado1 + $this->lado2) * $this->altura;
    }

    public function __toString() {
        return "Trapecio con lado 1: {$this->lado1}, lado 2: {$this->lado2}, altura: {$this->altura}";
    }

    public function __destruct() {
        parent::__destruct();
    }
}
?>
