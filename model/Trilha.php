<?php

class Trilha{
    public $id_trilha;
    public $nome;
    public $descricao;
    public $frase;
    public $autor;
    public $imagem;
    public $cor;

    /**
     * Trilha constructor.
     * @param $id_trilha
     * @param $nome
     * @param $descricao
     * @param $frase
     * @param $autor
     * @param $imagem
     */
    public function __construct($id_trilha, $nome, $descricao, $frase, $autor, $imagem, $cor)
    {
        $this->id_trilha = $id_trilha;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->frase = $frase;
        $this->autor = $autor;
        $this->imagem = $imagem;
        $this->cor = $cor;
    }

    /**
     * @return mixed
     */
    public function getIdTrilha()
    {
        return $this->id_trilha;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return mixed
     */
    public function getFrase()
    {
        return $this->frase;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @return mixed
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    public function getCor()
    {
        return $this->cor;
    }
}
