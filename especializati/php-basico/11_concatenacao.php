<?php

$var1 = 'Algo';
$var2 = 'Outro';

$var3 = $var1 . "\t" . $var2 . ' ' . 12;


echo $var3;

$name = 'Alexandre';
$company = 'Lightbase';
$salary = '1300.891';
$salary = number_format($salary, 2, ',', '.');


echo "\nO $name trabalha na empresa $company, e ganha R\${$salary} por mês!";
