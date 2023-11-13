<?php
class AparatoElectrico{
    protected $potencia;
    protected $encendido=false;
    static $consumoTotal;

    public function __construct($potencia){
        $this->potencia=$potencia;
    }  
  
    public function encender($encendido){
            
        if($encendido==false){
            $encendido=true;
            self::$consumoTotal=self::$consumoTotal+$this->potencia;
            return self::$consumoTotal;
        }
    }
    public function apagar($encendido){
        if($encendido==true){
            echo "Ya estaba apagado";
        }else{
            echo "Apagando...";
        }
    }
}
?>