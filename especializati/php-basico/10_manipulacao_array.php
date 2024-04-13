<?php

$ages = [
    12,
    14,
    18,
    20,
    44,
    50,
    98,
    78,
    56,
    33
];

echo $ages[8];

echo "\n";

echo $ages[
    count($ages)-1
    ];

echo "\n";

echo end($ages);

$filtered_ages = array_filter(
    $ages,function ($age){
        return $age >= 18;
});

var_dump(
    $filtered_ages
);

$names = ['Alexandre','EspecializaTi','Company'];
$names[0] = strtoupper($names[0]);

var_dump($names);

$names = array_map(
    callback: 'applyToUpper',
    array: $names
);

function applyToUpper($name): string
{
    return strtoupper($name);
}


var_dump($names);