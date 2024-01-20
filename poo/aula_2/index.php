<?php 

include('class.php');

$exemplo = new Exemplo();

// $exemplo->var2 = 'Alexandre';

// echo $exemplo->var2;
// echo "<br>";
// Exemplo::$var3 = 'mudando atributo estático';
// echo Exemplo::$var3;
// echo "<br>";
// echo Exemplo::metodoStatico();
echo $exemplo->var1;
$exemplo->setVar1('Alexandre');
echo $exemplo->getVar1();

?>