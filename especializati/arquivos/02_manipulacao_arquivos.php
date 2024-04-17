<?php

$content = 'Olá mundo!';

if (file_exists(('teste2.txt'))){
//    file_put_contents('teste2.txt',$content);
    var_dump(file_get_contents('teste2.txt'));
}
else{
    echo 'Arquivo não existe';
}
