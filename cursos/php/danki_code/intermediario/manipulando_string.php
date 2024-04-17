<?php 

$texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea molestias quasi corrupti esse sapiente nesciunt natus rem quo sed vel? Laborum fugit rem aut. Perspiciatis ad placeat libero fugit distinctio.";

echo substr($texto, 0, 20); // recortar string

echo "\n";

$nome = "Alexandre Mariano da Silva Junior";

$nome = explode(" ", $nome); // corta a string a partir dos espaços em branco

print_r($nome);

$nomes = implode(" ", $nome); // junta as strings deste array colocando espaçoes em branco 

echo $nomes."\n";


$conteudo = '<h1>Alexandre</h1> Outra coisa';

echo strip_tags($conteudo); // remove tags html

echo htmlentities('<div></div>'); 
?>