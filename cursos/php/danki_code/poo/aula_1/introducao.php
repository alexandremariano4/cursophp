<?php 

    class Pessoa{
        //objeto pessoa

        private $nome = 'Alexandre';
        private $idade = '24';
        private $peso = '100';

        public function crescer(){
            $this->comer();
            echo "estou crescendo\n";
        }   
        
        private function comer(){
            echo "estou comendo\n";

        }
    }

    //instanciar
    $pessoa = new Pessoa();

    $pessoa->crescer();

?>