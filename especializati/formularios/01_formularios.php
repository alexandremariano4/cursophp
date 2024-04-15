<?php

echo "Nome: {$_REQUEST['nome']}";
echo "<hr>";
echo "Senha: {$_REQUEST['senha']}";
echo "<hr>";
echo "Email: {$_REQUEST['email']}" ;
echo "<hr>";
if (isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != null){
    echo "Sim";
}
else{
    echo "Não";
}
echo "<hr>";
try {
    if (isset($_REQUEST['sexo']) != ''  && strlen($_REQUEST['sexo']) == 1){
        echo "Sexo: {$_REQUEST['sexo']}";
    }
    else{
    throw new ValueError('Sexo não informado');
    }
}
catch (ValueError $e){
    echo 'Sexo não informado';
}
echo "<hr>";
echo "Estado: {$_REQUEST['estado']}";
echo "<hr>";
echo "Descrição: {$_REQUEST['descricao']}" . isset($_REQUEST['descricao']) && $_REQUEST['descricao'] != null ? $_REQUEST['descricao'] : 'Descrição não enviada';
echo "<hr>";
echo "{$_REQUEST['enviar']}";
echo "<hr>";
// ---------------------------
//echo "Nome: {$_POST['nome']}";
//echo "<hr>";
//echo "Senha: {$_POST['senha']}";
//echo "<hr>";
//echo "Email: {$_POST['email']}" ;
//echo "<hr>";
//if (isset($_POST['concordo']) && $_POST['concordo'] != null){
//    echo "Sim";
//}
//else{
//    echo "Não";
//}
//echo "<hr>";
//echo "Sexo: {$_POST['sexo']}";
//echo "<hr>";
//echo "Estado: {$_POST['estado']}";
//echo "<hr>";
//echo "Descrição: {$_POST['descricao']}" . isset($_POST['descricao']) && $_POST['descricao'] != null ? $_POST['descricao'] : 'Descrição não enviada';
//echo "<hr>";
//echo "{$_POST['enviar']}";
//echo "<hr>";