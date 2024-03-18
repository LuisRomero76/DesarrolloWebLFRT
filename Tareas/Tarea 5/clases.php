<?php
    class Operacionescadena {
        private $cadena;

        public function __construct($c) {
            $this->cadena=$c;
        }

        public function invertir() {
            return strrev($this->cadena);
        }

        public function mayuscula() {
            return strtoupper($this->cadena);
        }

        public function minuscula() {
            return strtolower($this->cadena);
        }
    }
?>