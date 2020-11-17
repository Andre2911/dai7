<?php

class Empleado{
    private $nombre;
    private $categoria;
    private $basico;
    private $bonificacion;
    private $tipoaporte;
    
    public function __construct($nombre, $category, $basic, $boni, $tipo){
        $this->nombre = $nombre;
        $this->categoria = $category;
        $this->basico = $basic;
        $this->bonificacion = $boni;
        $this->tipoaporte = $tipo;
    }

    public function remuneracion(){
        $this->remuneracion = $this->basico + $this->bonificacion;
        echo '<p>La remuneración es de: ', $this->remuneracion,'</p>';
    }

    public function descuento(){
        if($this->tipoaporte == 'AFP'){
            $this->desc = (0.11) * $this->remuneracion;
            echo '<p">El descuento por ser de AFP es de: ', $this->desc,'</p>';
        }
        else{
            $this->desc = (0.13) * $this->remuneracion;
            echo '<p">El descuento por ser de ONP es de: ', $this->desc,'</p>';
        }
    }

    public function neto(){
        $this->neto = $this->remuneracion - $this->desc;
        echo '<p">El sueldo neto es de: ', $this->neto,'</p>';
    }


}

?>