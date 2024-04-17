<?php


$photo = $_FILES['imagem'];
$path = 'images';
$name = $photo['name'];

if (move_uploaded_file($photo['tmp_name'], "$path/$name")){
    echo 'Sucesso';
}
else{
    echo 'Erro!';
}

var_dump($_FILES);
var_dump($_FILES['imagem']['name']);
var_dump($_FILES['imagem']['type']);