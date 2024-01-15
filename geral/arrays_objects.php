<?php 


function soma(int $num1, int $num2): int {
    return $num1 + $num2;
};

$arr = array(1, 2, 3, 4, 5);

$pessoa = [
    'nome' => 'Neston',
    'func_soma' => 'soma',
];

echo $pessoa['nome']."\n";
echo $pessoa['func_soma'](2, 2);
echo "\n";

#faça um iterador no array pessoa usando o foreach  

foreach ($pessoa as $key => $value) {
    echo $key.": ".$value."\n";
}

foreach ($arr as $key => $value) {
    echo $key.": ".$value."\n";

}
echo "Teste $arr[0]";

?>