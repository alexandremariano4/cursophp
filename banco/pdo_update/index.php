<?php 

    $pdo = new PDO(
        dsn: 'mysql:host=localhost;dbname=banco',
        username:'root',
        password: '',        
    );

    $id = 2;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Barnola',sobrenome='Stinson' WHERE id=$id");
    
    if($sql->execute()){
        echo 'Cliente atualizado com sucesso!';
    }
    else{
        echo 'Erro ao atualizar cliente!';
    }
?>