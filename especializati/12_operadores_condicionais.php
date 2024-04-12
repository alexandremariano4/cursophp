<?php

$number = 13;
$numberTwo = 14;

if ($number == 12){
    echo "Número igual a 12\n";
}
elseif($number == 13){
    echo "Número igual a 13\n";
}
else {
    echo "Estou no else\n";
}
echo '<hr>';


if ($numberTwo == 14)
    echo "Número igual a 12 e estou printando em uma linha\n";
echo '<hr>';

if ($number == 13):
    echo "Número igual a 13 e estou no endif\n";
endif;


