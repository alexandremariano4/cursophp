<div style="padding-bottom: 10px">
    <a href="?page=albuns"><- Voltar para álbuns</a>
</div>

<h1>Músicas do álbum <?=$_GET['album']?></h1>
<a href="?page=new_music&album=<?=$_GET['album']?>" class="btn btn-success">Cadastrar nova música</a>
<hr>
<?php
$musics = getMusics($_GET['album']);

foreach($musics as $music):
$explodePathMusic = explode('/',$music);
$nameMusic = end($explodePathMusic);
?>
<div class="col-12">
    <h5 style="padding-left: 10px;padding-top: 10px"><?=$nameMusic?></h5>
    <audio class="player-audio" src="<?=$music?>" controls></audio>
</div>
<?php
    endforeach;
?>