<?php

$a = 3;
$b = 2;

if ($a == $b || $a == 3) {
    printf("no IF". "\n");
}

if ($a != $b){
    printf("A é diferente de B". "\n");
}

$a = 2;
$b = '2';
if ($a === $b) {
    printf("no IF");
}

$a = 2;
$b = '2';
if ($a !== $b) {
    printf("tsc");
}
