<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <?php 
        // if(isset($_GET["acao"])){
        //     $nome = $_GET["nome"];
        //     $email = $_GET["email"];

        //     echo $nome;
        //     echo "<br>";
        //     echo $email;
        // }
        
        if(isset($_POST["acao"]))
            echo $_POST["numero1"]+$_POST["numero2"];
            
        
        if(isset($_POST["acao1"]))
            echo $_POST["nome"];
        
        
        if(isset($_POST["valor"])){
            foreach ($_POST["valor_check"] as $key => $value) {
                echo "$key : $value <br>";
                echo "<hr>";
            }


        }
    ?>

    <form method="post">
        <input type="text" name="numero1">
        <input type="text" name="numero2">
        <input type="submit" name="acao" value="Enviar">
    </form>

    <form method="post">
        <select name="nome">
            <option value="alexandre">alexandre</option>
            <option value="talbeira">talbeira</option>
        </select>
        <input type="submit" name="acao1" value="Enviar">

    </form>
    
    <form method="post">
        
        <input type="checkbox" name="valor_check[]" value=10>10
        <input type="checkbox" name="valor_check[]" value=20>20
        <input type="checkbox" name="valor_check[]" value=30>30
        <input type="submit" name="valor" value="Enviar">

    </form>



</body>
</html>