<?php 

$nome = "Arroba";

switch($nome){

    case "Alexandre":
        echo "O nome é Alexandre";
        break;
    case "João":
        echo "O nome é João";
        break;
    default:
        echo "O nome não foi encontrado";

};

for($i=0;$i<10;$i++){
    if($i == 6){
        break;
    }
    if($i == 3){
        continue;
    }
    echo $i;
    echo "<hr>";

}

?>