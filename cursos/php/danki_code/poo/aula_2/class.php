<?php 

/*Classe de exemplo */ 

class Exemplo{

    public $var1;
    public $var2;
    // public static $var3 = 'static';

    // public function metodo(){
    //     echo "função publica\n";
    // }

    // public static function metodoStatico(){
    //     echo "metodo estática\n";
    // }

    // private function metodo2(){
    //     echo "função privada\n";
    // }
    
    public function setVar1($var1){
        $this->var1 = $var1;
    }
    public function getVar1(){
        return $this->var1;
    }

}

?>