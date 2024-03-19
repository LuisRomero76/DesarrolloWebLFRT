<?php

class Cola {
    private $primero;
    private $ultimo;
    private $elementos;

    public function __construct() {
        $this->primero=0;
        $this->ultimo=0;
        $this->elementos=array();
    }

    public function insertar($valor)
    {
        $this->elementos[$this->ultimo]=$valor;
        $this->ultimo++;
    }

    public function eliminar() {
        if ($this->primero == $this->ultimo) {
            return "La cola esta vacia";
        }
        else {
            $valor = $this->elementos[$this->primero];
            $this->primero++;
            return $valor;
        }
    }

    public function mostrar(){
        if ($this->primero == $this->ultimo) {
            return "La cola esta vacia";
        }
        else {
            for ($i=$this->primero;$i < $this->ultimo; $i++){
                echo $this->elementos[$i]."<br>";
            }
        }
    }

}

?>