<?php
class Examen {
    private $n;
    private $cadena;
    private $a;
    private $b;
    private $c;

    public function __construct($n, $cadena, $a, $b, $c) {
        $this->n = $n;
        $this->cadena = $cadena;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calcularFibonacci() {
        $fibonacci = [0, 1];
        for ($i = 2; $i < $this->n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        return $fibonacci;
    }

    public function calcularMayor() {
        $mayor = max($this->a, $this->b, $this->c);
        return [
            'a' => $this->a,
            'b' => $this->b,
            'c' => $this->c,
            'mayor' => $mayor
        ];
    }

    public function piramide() {
        $longitud = strlen($this->cadena);
        for ($i = 0; $i < $longitud; $i++) {
            echo str_repeat(" ", $longitud - $i - 1);
            echo substr($this->cadena, 0, $i + 1) . "<br>";
        }
    }
}
?>
