<?php 
    $idade = readline("Digite sua idade: ");

    echo "Você tem $idade anos.\n";

    if($idade >=18 ){
        echo "Permitido entrar, você é maior de idade.";
    }
    else{
        echo "Você não tem idade para entrar.";
    }
?>