<a href="?page=albuns"><- Voltar para álbuns</a>
<hr>
<h1>Cadastrar novo álbum</h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group" style="padding-right: 10px;padding-bottom: 10px">
        <input type="text" name="name" placeholder="Nome:" class="form-control" >
    </div>
    <div class="form-group" style="padding-right: 10px;padding-bottom: 10px">
        <input type="file" name="image" placeholder="Nome:" class="form-control" >
    </div>
    <input type="submit" value="Cadastrar" class="btn btn-success" >
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $album = $_POST['name'];

    $path = "albuns/$album";
    if (!is_dir($path)){
        mkdir($path);
    }
    $file = $_FILES['image'];
    $fileInfo = explode('.',$file['name']);


    $extension = $fileInfo[1];
    $nameImage = "{$_POST['name']}.$extension";

    if(move_uploaded_file($file['tmp_name'],"$path/$nameImage")){
        header('location: ?page=albuns');
    }else{
        echo 'Falha no upload..;';
    }

}
?>