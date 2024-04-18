<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Locadora: Cadastrar Conteúdo</title>
</head>
<body>
<a href="pages/cadastroConteudos.php"><- Cadastro de conteudos</a>
<div class="content">
    <div class="container">
        <span class="text-center">Conteúdos cadastrados:</span>
        <div class="col-2">
            <span class="texto">Nome Do conteúdo: <?=getContents()->nomeConteudo?></span>
            <span class="texto">Tipo de conteúdo: <?=getContents()->tipoConteudo?></span>
            <span class="texto">Mídia: <?=getContents()->tipoMidia?></span>
        </div>
</div>

</body>
</html>