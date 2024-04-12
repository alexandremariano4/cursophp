<?php

$var = 20;

switch ($var) {
    case $var > 20:
        echo 'Número é maior que 20' . "\n";
        break;
    case $var < 20:
        echo 'Número é menor que 20' . "\n";
        break;
    case $var == 20:
        echo 'Número é 20' . "\n";
        break;
    default:
        echo 'Não é nenhum valor esperado' . "\n";
        break;
}
