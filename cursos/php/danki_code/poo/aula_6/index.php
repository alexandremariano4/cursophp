<?php 

include('class1.php');

$teste = new Class1($nome="Alexandre",$idade=19);

echo $teste->getNome();
echo "\n";
echo $teste->getIdade();


$teste->setNome("Talbeira");
$teste->setIdade(20);
echo "\n";

echo $teste->getNome();
echo "\n";
echo $teste->getIdade();
?>