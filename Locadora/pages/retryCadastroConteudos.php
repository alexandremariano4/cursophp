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
<div class="content retry">
<div class="container">
    <form action="contents.php" method="post">
        <h1 class="text-center">Cadastro de Conteúdo</h1>
        <div class="form-group">
            <input type="text" name="nomeConteudo" placeholder="Nome" class="form-control">
        <div class="form-group">
            <select name="tipoMidia" class="form-control">
                <option value="">Escolha a Mídia</option>
                <option value="DVD">DVD</option>
                <option value="CD">CD</option>
                <option value="Fita">Fita</option>
            </select>
        </div>
        </div>
        <div class="form-group">
            <input type="text" name="tipoConteudo" placeholder="Tipo de conteúdo Ex: (Filme,Série,Show)" class="form-control">
        </div>
        <span class="text-center">Por favor preencha todos os campos corretamente</span>
        <div class="form-group">
            <input type="submit" value="Cadastrar Conteúdo" class="btn btn-success">
        </div>
    </form>
</div>
</div>
</body>
</html>