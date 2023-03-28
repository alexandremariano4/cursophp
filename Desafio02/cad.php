<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        </header>
        <main>
            <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $numero = random_int(0,100);
            echo "Gerando um número aleatório entre 0 e 100...";
            echo "<p>O número sorteado foi <strong>$numero</strong></p>";
        ?>
        <p>
            <form action="cad.php" method="get">
                <input type="submit" value="Gerar outro">
            </form>
            
    </main>
</body>
</html>