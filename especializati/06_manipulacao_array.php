<?php 

// $nomes = [
//     'Alexandre','Teste','Company'
// ];

$name = 'Alexandre';
$company = 'Lightbase';
$year = 2024;

// $infoCompany = [
//     $name,
//     $company,
//     $year,
// ];

$infoCompany = compact('name','company','year');

var_dump($infoCompany);

var_dump(is_array($name));
var_dump(is_array($infoCompany));

var_dump(in_array('Alexandre',$infoCompany));