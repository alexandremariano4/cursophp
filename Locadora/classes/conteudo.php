<?php

class Conteudo
{
    public $nomeConteudo;
    public $tipoConteudo;
    public function setContent(string $nomeConteudo) : void{
        $this->nomeConteudo = $nomeConteudo;
    }
    public function setTipoConteudo(string $tipoConteudo) : void{
        $this->tipoConteudo = $tipoConteudo;
    }

}

