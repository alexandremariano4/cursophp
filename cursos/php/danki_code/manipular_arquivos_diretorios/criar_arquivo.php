<?php 

    if(file_exists('file.txt')){
        echo nl2br("Arquivo existe\n");
    }else{
        //Criar novo arquivo
        $content = "Meu novo conteúdo criado através do php\nOutra Linha\nMais outra linha";
        file_put_contents('file.txt', $content);
    }
    sleep(5);
    $file_content = file_get_contents('file.txt');
    
    echo nl2br($file_content);
    
    unlink('file.txt');
    
    $http_content = file_get_contents('https://caminhosdamoda.sebraemg.com.br/');
    
    echo $http_content;
?>