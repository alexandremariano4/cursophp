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
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? "Número não informado";
            $numero_anterior = $numero-1;
            $numero_posterior = $numero+1;

            echo "<p>O número digitado foi <strong>$numero</strong></p>";
            echo "<p>O número anterior a $numero é <strong>$numero_anterior</strong></p>";
            echo "<p>O número posterior a $numero é <strong>$numero_posterior</strong></p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>