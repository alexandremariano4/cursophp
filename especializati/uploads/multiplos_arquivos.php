<?php

$photos = $_FILES['imagens'];
$path = 'images';

if (!is_dir($path)){
    mkdir($path);
}

for ($i = 0; $i < count($photos['name']); $i++){
    if (move_uploaded_file($photos['tmp_name'][$i], "$path/".$photos['name'][$i] )){
        echo 'Sucesso!';
        echo '<br>';
    }
    else{
        echo 'Falha!';
        echo '<br>';
    }
}