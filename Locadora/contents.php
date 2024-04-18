<?php
include_once ('classes/midia.php');

$post_content = $_POST;

$content = new Midia(
    $post_content['nomeConteudo'],
    $post_content['tipoMidia'],
    $post_content['tipoConteudo'],
);

var_dump($content);