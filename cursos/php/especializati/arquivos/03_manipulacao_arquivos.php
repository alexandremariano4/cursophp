<?php
date_default_timezone_set('America/Sao_Paulo');

$file = fopen('projeto.log','a+');
$data = date('d/m/Y');
$horas = date('h:i:s');
fwrite($file,"Hoje é dia $data e são $horas\r\n");

assert(fclose($file) == true);

function generateLog($text){
    $file = fopen('projeto.log','a+');
    $data = date('d/m/Y');
    $horas = date('h:i:s');
    fwrite($file,"$text -> $data $horas\r\n");

    assert(fclose($file) == true);
}
generateLog('Ai que delícia o verão');