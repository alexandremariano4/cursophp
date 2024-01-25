<?php 
    include('config.php');

    spl_autoload_register('myAutoLoad');

    new Utilidades();
    new Home\Inicial();

    
    echo Utilidades::VALOR;
?>