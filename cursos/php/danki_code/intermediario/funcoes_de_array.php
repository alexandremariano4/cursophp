<?php 

// $array1 = array("valor1"=>1,"valor2"=> 2,"valor3"=> 3,7);
// $array2 = array(4, 5, 6);
// $array3 = array_merge($array1, $array2);
// print_r($array3);



// $array1 = array("valor1"=>1,"valor2"=> 2,"valor3"=> 3,7);
// $array2 = array("valor1"=>4, 5, 6);
// $array3 = array_intersect_key($array1, $array2);

// print_r($array3);


#faça um exemplo com a função array_map

$array1 = array("valor1"=>1,"valor2"=> 2,"valor3"=> 3,7);

function multiplica($valor){
    return $valor * 2;
}

$array2 = array_map("multiplica", $array1);

print_r($array2);
?>