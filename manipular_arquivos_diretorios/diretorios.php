<?php 

//pega diretório atual
$path = getcwd();

//cria diretório
mkdir("$path/teste");

if(is_dir("$path/teste")){
    echo "Diretório criado com sucesso!\n";
}

sleep(3);

//apaga diretório
rmdir("$path/teste");

if(!is_dir("$path/teste")){
    echo "Diretório removido com sucesso!\n";
};

if(!is_dir("$path/arquivo_teste.txt")){
    echo "Arquivo não é diretório\n";
};

?>