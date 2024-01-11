<?php 


function operacao($num1,$op,$num2):mixed{

    if ($op == "+"){
        return $num1 + $num2;
    }
    else if($op == "-"){
        return $num1 - $num2;
    }
    else if($op == "*"){
        return $num1 * $num2;
    }
    else if($op == "/"){
        return $num1 / $num2;
    }
    else{
        return throw new Exception('Operador escolhido incorreto, favor informar um operador válido');
    }
}
$primeiro_numero = 0;
$resultado = 0;
$primeira_vez = true;


while(true){

    if($primeira_vez){
        echo "Digite um número: ";
        $primeiro_numero = readline();

        echo "Digite o operador: ";
        $operador = readline();

        echo "Digite o segundo número: ";
        $segundo_numero = readline();

        $primeira_vez = false;
    }
    else{
        
        $primeiro_numero = $resultado;

        echo "Digite o operador: ";
        $operador = readline();

        echo "Digite o segundo número: ";
        $segundo_numero = readline();
    }

    if ($primeiro_numero == 666 || $operador != 'exit' || $segundo_numero != 666){
        break;
    }


    try{
        
        $resultado = operacao(
            num1: $primeiro_numero,
            op: $operador,
            num2: $segundo_numero);
        
        echo number_format($resultado,2)."\n";
        }
    catch(Exception $ex){
        echo "Operação inválida\n";
    }   

}


?>