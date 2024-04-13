<?php
/*
$state = 'Belo Horizonte/MG';
$cidade = explode('/', $state);
$state = implode(' ', $cidade);


print_r($cidade);
print_r($state);
*/

$info = 'Belo Horizonte/MG/Brasil/Terra';
$arrayState = explode('/',$info);
var_dump($arrayState);

echo "<hr>\n";

$arrayTest = [1,2,3,4,5];
echo implode( ' - ',$arrayTest);