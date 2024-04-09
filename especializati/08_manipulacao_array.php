<?php 
// O unset pode apagar todo o array se nao mandar com a posição

$carrinho = [
    'Tomate','Cebola','Feijao','Bala'
];
var_dump($carrinho);
echo '<hr>';

array_pop($carrinho);

var_dump($carrinho);
echo '<hr>';

array_shift($carrinho);

var_dump($carrinho);
echo '<hr>';

unset($carrinho[0]);

var_dump($carrinho);
echo '<hr>';

array_push($carrinho,'Batata Frita');

var_dump($carrinho);
echo '<hr>';

array_unshift($carrinho,'Leguminos');

var_dump($carrinho);
echo '<hr>';

array_unshift($carrinho,'Leguminos');

var_dump($carrinho);
echo '<hr>';

$carrinho = array_unique($carrinho);

var_dump($carrinho);
echo '<hr>';