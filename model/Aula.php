<?php

class Aula{
    public $nome;
    public $imagem;
    public $data;
    public $descricao;
    public $id;
    public $id_secao;

    function __construct($id, $id_secao, $nome,$descricao, $data, $imagem) {
        $this->id = $id;
        $this->nome = $nome;
        $this->id_secao = $id_secao;
        $this->descricao = $descricao;
        $this->data = $data;
        $this->imagem = $imagem;
    }
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getId_secao() {
        return $this->id_secao;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getData() {
        return $this->data;
    }

}
