<h1>Albuns</h1>
<hr>
<div class="class-content" style="padding-right: 10px;padding-bottom: 10px">
    <a href="?page=new_album" class="btn btn-success">Adicionar Novo Álbum</a>
</div>
<hr>

<div class="row">
    <?php
        $albuns = getAlbuns();
        foreach($albuns as $album):
            $infoAlbum = explode('/',$album);
            $nameAlbum = $infoAlbum[1];
            $imgAlbum = "$album/$nameAlbum.jpg"
    ?>
        <div class="col-3 album" >
            <a href="?page=musics&album=<?=$nameAlbum?>">
                <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album">
                <h4><?=$nameAlbum?></h4>
            </a>
        </div>
    <?php
        endforeach;
    ?>
</div>