<?php 

$cars = array(
    1,'Alexandre',12.2
);

var_dump($cars);

$carrinhos = [
    'Uno','Gol Bolinha','Fusion','Civic'
];

var_dump($carrinhos);

$comidas = [
    'Frango' =>'Vegano',
    'Boi' => 'Vegetariano',
    'Porco' => 'Onívoro',
];

var_dump($comidas);

echo $comidas['Frango'];

$comidas['Salada'] = 'Carnívoro';

echo $comidas['Salada'];



$carros = [ 
    'Mercedes' => [
        'color' => 'black',
        'motor' => 2.5,
        'name' => 'Nome do carro da mercedes',
    ],
    'Ford' => [
        'color' => 'yellow',
        'motor' => 3.2,
        'name' => 'Nome do carro da ford',
    ],
];

var_dump($carros);
var_dump($carros['Ford']);

echo($carros['Ford']['name']);