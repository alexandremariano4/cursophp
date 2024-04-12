<?php

$names = [
    'abcd',
    'bazuco',
    'caquita',
    'domado',
    'éviado',
    'xapisco'
];

foreach ($names as $name) {
    echo $name . "\n";
};

$names = [
    'Catapibas' => 'abcd',
    1 => 'bazuco',
    2 => 'caquita',
    3 => 'domado',
    4 => 'éviado',
    5 => 'valor'
];

foreach ($names as $key => $value){
    echo  $key . $value . "\n";
}