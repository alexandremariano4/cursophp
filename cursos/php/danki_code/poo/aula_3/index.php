<?php 

class Filha{

    protected function funcaoTeste(){
        echo "chamando função teste\n";
    }

    public function printHello(){
        echo "Hello World\n";
    }

}

class Pai extends Filha{

    public function funcaoTeste(){
        parent::funcaoTeste();
        echo "<br>";
        echo "nova funcao\n";
    }

    public function mostrarTchau(){
        echo "Tchau Mundo\n";
        echo "<br>";
        $this->funcaoTeste();

    }
}


$pai = new Pai();

$pai->mostrarTchau();

echo "<br>";

$filha = new Filha;


?>