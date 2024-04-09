<?php 

    $pdo = new PDO(
        dsn: 'mysql:host=localhost;dbname=banco',
        username:'root',
        password: '',        
    );

    $id = [7];
    
    $id = implode(',', $id);
    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id in (?) ");
    
    if($sql->execute(array($id))){
        echo 'Cliente atualizado com sucesso!';
    }
    else{
        echo 'Erro ao atualizar cliente!';
    }


?>