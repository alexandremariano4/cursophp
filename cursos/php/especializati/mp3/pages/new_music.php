<a href="?page=albuns">← Voltar para o álbum <?=$_GET['album']?></a>
<hr>
<h1>Cadastrar nova música para o álbum <?=$_GET['album']?></h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group" style="padding-right: 10px;padding-bottom: 10px">
        <input type="file" name="audio" placeholder="Nome:" class="form-control" >
    </div>
    <input type="submit" value="Cadastrar" class="btn btn-success" >
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $album = $_GET['album'];

    $path = "albuns/$album/musics/";
    if (!is_dir($path)){
        mkdir($path);
    }
    if (move_uploaded_file($_FILES['audio']['tmp_name'],"$path{$_FILES['audio']['name']}")){
        header("Location: ?page=musics&album=$album");
    }
    else{
        echo 'Falhou';
    }
}
?>