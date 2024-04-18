<?php
include('conteudo.php');
class Midia extends Conteudo
{
    public $tipoMidia;
    public $nomeConteudo;
    public $tipoConteudo;

    public function __construct(
        string $nomeConteudo,
        string $tipoMidia,
        string $tipoConteudo,
    )
    {
        $tipos_permitidos = [
            'DVD',
            'CD',
            'Fita'
        ];
        if (!in_array($tipoMidia, $tipos_permitidos)){
            throw new InvalidArgumentException("Tipo de midia inválido, informe um valor entre (DVD,CD,Fita)");
        }
        $this->tipoMidia = $tipoMidia;
        parent::setContent($nomeConteudo);
        $this->nomeConteudo = $nomeConteudo;
        parent::setTipoConteudo($tipoConteudo);
        $this->tipoConteudo = $tipoConteudo;
    }

}
