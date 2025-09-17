<?php
    class FiguraGeometrica{
        public $arista = null;
        public function area(){
            return $this->arista * $this->arista;
        }
    }
    $cuadrado = new FiguraGeometrica();
    $cuadrado->arista = 4;
    echo "El área del cuadrado es: " . $cuadrado->area();
?>