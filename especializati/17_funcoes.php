<?php

$taxa = 2.5;
echo "$taxa\n";
function soma(int $x, int $y) : mixed
{
    global $taxa;
    $taxa = 5.5;
    return [
        'soma' => ($x+$y) * $taxa,
        'taxa' => $taxa] ;
}
echo "$taxa\n";

var_dump(soma(5,5));


$result = soma(3,3);

var_dump($result['soma']);
var_dump($result['taxa']);

