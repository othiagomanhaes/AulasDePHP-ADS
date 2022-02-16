<?php

class Fruta {
// Propriedades ou atributos da classe
    var $nome;
    var $tipo;

    //Construtor da Classe: Essa função é executada todas as vezes em que uma instância da classe é criada.
    //Como abaixo, essa função pode ser vazia. Ou seja, não realiza nenhuma ação.

    public function __construct() { }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
}
?>