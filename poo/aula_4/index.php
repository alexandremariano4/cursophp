<?php 

abstract class Teste{

    public function func1(){
        echo "chamando funcao 1 ";
    }
    abstract function func2();
}

class Principal extends Teste{

    public function func2(){
        echo "declarando um metodo abstrato";
    }

    public static function metodoestatico(){
        echo "metodo estatico";
    }

    public function func3(){
        Principal::metodoestatico();
        echo "<br>";
        self::metodoestatico();
    }
}

$principal = new Principal();

Principal::metodoestatico();
// $principal->func1();
echo "<br>";
// $principal->func2();
$principal->func3();

?>