<?php
include_once ('classes/midia.php');


$post_content = $_POST;

try {
    $content = new Midia(
        $post_content['nomeConteudo'],
        $post_content['tipoMidia'],
        $post_content['tipoConteudo'],
    );
    include_once('pages/content.php');
}
catch (InvalidArgumentException $e){
    include_once('pages/retryCadastroConteudos.php');
}


function getContents(){
    global $content;
    return $content;
}
