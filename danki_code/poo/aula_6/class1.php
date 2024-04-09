<?php 

class Class1{
    
    private $nome;
    private $idade;

    public function __construct(string $nome,int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(): string{
        return $this->nome;
    }
    public function getIdade(): int{
        return $this->idade;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function setIdade(string $idade){
        $this->idade = $idade;
    }

}

?>