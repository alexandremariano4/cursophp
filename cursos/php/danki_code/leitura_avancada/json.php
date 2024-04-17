<?php 

$json = '{
    "name": "John",
    "age": 30,
    "cars": [
        "Ford",
        "BMW"
    ],
    "cities" : ["paris","new york"]
}';


// $array = var_dump(json_decode($json,true));
// $objeto = var_dump(json_decode($json));


$array = json_decode($json,true);
$objeto = json_decode($json);

echo $array['name'] . "\n";
print_r($objeto->cars);

$array = ['nome'=>'Alexandre','cidade'=>'Belo Horizonte'];

$new_json = json_encode($array);

echo $new_json;

file_put_contents('teste.json', $new_json);


?>