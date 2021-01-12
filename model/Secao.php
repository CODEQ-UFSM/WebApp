<?php

class Secao{
    public $nome;
    public $descricao;
    public $id;
    public $id_trilha;

    function __construct($id, $id_trilha, $nome,$descricao) {
        $this->id = $id;
        $this->id_trilha = $id_trilha;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getIdTrilha() {
        return $this->id_trilha;
    }

}
