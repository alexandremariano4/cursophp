<?php 



    namespace Sessao1;
    use Sessao2\class2;
    

    class class1{

        public function __construct() {
            echo "Classe 1 instanciada\n";
            new class2();
        }
    }

?>