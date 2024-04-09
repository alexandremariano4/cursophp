<?php 

$infoCompany = [
    'name' => 'EspecializaTi',
    'founder' => 'Carlos Ferreira',
    'year_current' => 2018,
];

$infoCompany2 = [
    'courses' => [
        'PHP','JS','Vue JS','Laraveç'
    ],
    'total_courses' => 26,
];

var_dump($infoCompany);

var_dump(array_keys($infoCompany));
var_dump(array_values($infoCompany));

echo(count($infoCompany));

$infoGeral = array_merge($infoCompany, $infoCompany2);
echo '<pre>';
var_dump($infoGeral);