<?php 

class Cliente{
    public $id;
    public $nome;
    public $email;
    public $cpf;
    public $created_at;
    public $updated_at;
    public $fk_perfil;
}



    $pdo = new PDO(
        dsn: 'mysql:host=10.12.6.23;dbname=caminhos_dev',
        username:'u_caminhos_dev',
        password: 'sebrae@521',        
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("SELECT * FROM `clientes` WHERE id = ? ");
    //http://localhost/cursophp/banco/pdo_select/?id_cliente=1
    if($sql->execute(array($_GET['id_cliente']))){
        $resultado = $sql->fetchAll(PDO::FETCH_CLASS, 'Cliente');
        foreach($resultado as $cliente){
            /** @var Cliente $cliente */
            // echo $cliente->id, "\n";
            echo "ID: " . $cliente->id, "\n" . "<br>";
            echo "Nome: " . $cliente->nome, "\n" . "<br>";
            echo "Email: " . $cliente->email, "\n" . "<br>";
            echo "<hr>";

            
        }
    }
    else{
        echo "Erro ao buscar cliente!";
    }

?>